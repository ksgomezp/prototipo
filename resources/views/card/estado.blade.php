@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <p class="h1">Tu estado se encuentra en:</p>
        <div class="col-md-8">
            <div class="card">
              <img class="img-fluid" src="{{ asset($imagen) }}" >
              <a class="btn btn-light" href="{{ route('home.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
