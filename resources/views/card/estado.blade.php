@extends('layouts.master')

@section('content')

<style>

.texto-abajo{
    position: absolute;
    top: -390px;
    left: 100px;

}>
</style>

<div class="container">
  <img class="img-fluid" src="{{ asset('images/banner-rastrea.png') }}"  usemap="#image-map">
  <map name="image-map">
      <area target="" alt="" title="" href="{{ route('home.index') }}" coords="29,119,345,180" shape="rect">
  </map>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="texto-abajo">
              <img class="img-fluid" src="{{ asset($imagen) }}" width="500" height="500">
              <!<a class="btn btn-light" href="{{ route('home.index') }}"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
