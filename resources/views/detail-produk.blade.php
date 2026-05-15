@extends('layout.master')

@section('title', 'Latihan 2 - Box Model')

@section('content')
<div class="container py-5">
    <h1 class="bg-dark text-white p-3 mb-1">Saya RindiAlv</h1>
    <h2 class="bg-secondary text-white p-2 mb-4">Web/Mobile Developer</h2>

    <div class="mb-4">
        <img src="{{ asset('img/foto_rindi.jpeg') }}" alt="Foto RindiAlv" 
             class="img-thumbnail shadow" style="max-width: 200px;">
    </div>

    <div class="bg-white text-dark p-4 border-start border-5 border-dark shadow-sm" style="line-height: 1.6;">
        <p class="mb-0">
            Saya adalah lulusan Teknik Informatika. Berpengalaman dalam Web Designer dan Developer.
        </p>
    </div>
</div>
@endsection