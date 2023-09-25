@extends('component.app')

@section('content')
  <div class="container d-flex align-items-center">
  <div class="card p-5 mt-5 align-items-center bg-card mx-auto w-50">
    <h1 class="fs-3 text-center">Halo Semua perkenalkan saya {{ $name }}, Dari {{ $univ }}</h1>

    <div class="btn-container d-flex mt-3">
    <a href="{{ url('/landing')}}" class="btn me-1 btn-soft">
      home
    </a>
    <a href="{{ url('/profile')}}" class="btn ms-1 btn-soft">
      Profil Kampus
    </a>
    </div>
    
  </div>
  </div>
@endsection