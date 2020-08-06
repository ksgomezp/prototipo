@extends('layouts.master')

@section('content')
<div class="container">
  <img class="img-fluid" src="{{ asset('images/lo-sentimos.png') }}" usemap="#image-map">
  <map name="image-map">
      <area target="" alt="" title="" href="{{ route('home.index') }}" coords="29,119,345,180" shape="rect">
  </map>>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
