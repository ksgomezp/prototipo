@extends('layouts.master')

@section('content')

@isset($message)
<div class="alert alert-danger">
<strong>{{$message}}</strong>
</div>
@endif

<style>

.texto-abajo{
    position: absolute;
    top: -350px;
    left: 200px;
}>
</style>

<div class="container">
  <img class="img-fluid" src="{{ asset('images/banner-rastrea.png') }}" usemap="#image-map">
  <map name="image-map">
      <area target="" alt="" title="" href="{{ route('home.index') }}" coords="29,119,345,180" shape="rect">
  </map>>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="texto-abajo">
              <form method="POST" action="{{ route('card.mostrar') }}" >
                  @csrf

                  <label for="cedula">Ingrese su cedula</label>
                  <input  type="number" class="form-control" name="cedula" value="{{ old('cedula') }}"  required/>
                  <label for="digitos">Ingrese los ultimos 4 digitos de su tarjeta</label>
                  <input  type="password" class="form-control"  name="digitos" value="{{ old('digitos') }}"  required/>
                </br>
                <div style="text-align:center">
                  <input type="submit"  class="btn btn-primary " value="OK" />
                </div>
              </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
