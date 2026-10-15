@extends('layouts.main')

@section('header-title', 'Home')

@section('content')

<div class="w-full bg-cover bg-center min-h-96 flex items-center" style="background-image: url('{{ asset('/image/garden.png') }}')">
    <div class="w-full max-w-5xl mx-auto px-6 flex flex-col items-center justify-center text-center text-[#fffbeb] drop-shadow-md">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Garden AI</h1>
        <p class="text-lg md:text-xl font-medium opacity-90">Welcome to your own Garden</p>
    </div>
</div>

<div class="w-full py-12">
    <div class="max-w-5xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-8 text-[#14532d]">

        <div class="w-full md:w-1/2 max-w-md h-80 rounded-xl overflow-hidden shadow-lg">
            <img src="{{ asset('/image/plant.jpg') }}" alt="plant" class="w-full h-full object-contain">
        </div>

        <div class="w-full md:w-1/2 flex items-center justify-center md:justify-start">
            <p class="text-2xl md:text-3xl font-bold text-center md:text-left">Welcome to your own Garden</p>
        </div>

    </div>
</div>

@endsection
