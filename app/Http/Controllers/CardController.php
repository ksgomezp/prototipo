<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
class CardController extends Controller
{

  public function rastrear()
  {
      return view('card.index');
  }

  public function felicitaciones()
  {
      return view('card.felicitaciones');
  }

public function mostrar(Request $request)
    {

        if($request->cedula == 12345678 && $request->digitos == 1234){
          $estados = ["cita-agendada.png", "pendiente-agendamiento.png","pendiente-entrega.png","tarjeta-entregada.png","tarjeta-activada.png"];
          $random = (rand(0,4));
          $imagen = "images/".$estados[$random];

          return view('card.estado')->with('imagen', $imagen);
        }
        else {
          $message = "Información ingresada sin registros";
            return view('card.index',compact('message'));
        }


    }

  public function activar()
  {
  return view('card.activar');
  }


  public function v_cedula(Request $request)
  {
   $cedula = $request->cedula;
   Session::push('cedula', $cedula);
   return view('card.tarjeta');



  }

  public function v_tarjeta(Request $request)
  {

    $tarjeta = $request->tarjeta;
    Session::push('tarjeta', $tarjeta);
   return view('card.otp');

  }

  public function v_otp(Request $request)
  {

    $otp = $request->otp;
    Session::push('otp', $otp);
    return view('card.trans');


  }

  public function v_trans(Request $request)
  {

      $cedula = array_slice(Session::get('cedula'), -1, 1);
      $tarjeta = array_slice(Session::get('tarjeta'), -1, 1);
      $otp = array_slice(Session::get('otp'), -1, 1);

      if($cedula[0] == 12345678 && $tarjeta[0] == 12345 &&
       $otp[0] == 123456 && $request->apellido == "gomez" && $request->exp == "2020-08-04"){

        return view('card.aceptado');
      }
      else {
          return view('card.rechazado');
      }


  }

  public function aceptado()
  {
      return view('card.aceptado');
  }

  public function rechazado()
  {
      return view('card.rechazado');
  }
  }
