@extends('component.app')

@section('content')
    <div class="container">
        <h1 class="text-center p-5">Profil Kampus</h1>
        <div class="row mt-5">
            <div class="col-6 text-center">
                <img src="assets/img/logo.jpeg" alt="logo" class="w-50 rounded">
            </div>
            <div class="col-6">
                <p class="fs-4 fw-bold">
                {{ $deskripsi }}.
                </p>
                <a href="{{ url('/landing') }}" class = "w-50 btn btn-soft">Home</a>
            </div>
        </div>
    </div>
@endsection