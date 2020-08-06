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
  <img class="img-fluid" src="{{ asset('images/banner-activa.png') }}"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="texto-abajo">
              <form method="POST" action="{{ route('card.v_otp') }}" >
                  @csrf

                  <label for="otp">Ingrese el codigo otp que enviamos a tu celular y mail</label>
                  <input  type="number" class="form-control" name="otp" value="{{ old('otp') }}"  required/>
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
