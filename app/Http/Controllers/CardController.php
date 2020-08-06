<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CardController extends Controller
{

  public function rastrear()
  {
      return view('card.index');
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

            if($request->cedula == 12345678){
              return view('card.tarjeta');
            }
            else {
              $message = "La cedula ingresada no aplica";
                return view('card.activar',compact('message'));
            }


        }

        public function v_tarjeta(Request $request)
            {

                if($request->tarjeta == 12345){
                  return view('card.otp');
                }
                else {
                  $message = "Datos invalidos";
                    return view('card.activar',compact('message'));
                }


            }

            public function v_otp(Request $request)
                {

                    if($request->otp == 123456){
                      return view('card.trans');
                    }
                    else {
                      $message = "Datos invalidos";
                        return view('card.activar',compact('message'));
                    }


                }

                public function v_trans(Request $request)
                    {
                        if($request->apellido == "gomez" && $request->exp == "2020-08-04"){
                          $success = "Tarjeta activada correctamente";
                          return view('card.activar',compact('success'));
                        }
                        else {
                          $message = "Oops! Algo salio mal.   Debes acercarte al centro de atención para validar el estado de tu tarjeta";
                            return view('card.activar',compact('message'));
                        }


                    }

}
