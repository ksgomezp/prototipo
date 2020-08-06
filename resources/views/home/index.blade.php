@extends('layouts.master')

@section('content')
<div class="container">
  <img class="img-fluid" src="{{ asset('images/banner.png') }}" usemap="#image-map">
  <map name="image-map">
      <area target="" alt="" title="" href="{{ route('card.activar') }}" coords="240,293,461,335" shape="rect">
      <area target="" alt="" title="" href="{{ route('card.rastrear') }}" coords="594,290,823,332" shape="rect">
      <area target="" alt="" title="" href="{{ route('home.index') }}" coords="29,119,345,180" shape="rect">
  </map>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
