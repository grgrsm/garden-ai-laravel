@extends('layouts.main')

@section('header-title', 'Home')

@section('content')

<div class="w-full bg-cover bg-center min-h-96 flex items-center" style="background-image: url('{{ asset('/image/garden.png') }}')">
    <div class="w-full max-w-5xl mx-auto px-6 flex flex-col items-center justify-center text-center text-[#fffbeb] drop-shadow-md">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Garden AI</h1>
        <p class="text-lg md:text-xl font-medium opacity-90">Our contacts</p>
    </div>
</div>

<div class="w-full py-12">
    @if($errors->any())
    <div class="w-full max-w-3xs mx-auto border border-pink-900 text-pink-900 p-2">
        <ul>
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="max-w-80 md:max-w-5xl mx-auto px-6 flex flex-col md:flex-row items-center justify-center gap-8 text-[#14532d]">
        <form action="{{ route('contacts.post')}}" method="POST" class="flex flex-col max-w-80 w-full">
            @csrf
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <div class="flex flex-col justify-between">
                        <label for="name" class="p-1">Name</label>
                        <input type="text" placeholder="Enter your name" name="name" id="name" value="{{ old('name') }}" class="max-w-33 md:max-w-39 w-full text-sm md:text-lg">
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="email" class="p-1">Email</label>
                    <input type="text" placeholder="Enter your email" name="email" id="email" value="{{ old('email') }}" class="max-w-33 md:max-w-39 w-full text-sm md:text-lg ">
                </div>
            </div>
            <label for="name" class="p-1">Subject</label>
            <input type="text" placeholder="Enter the subject" name="subject" id="subject" value="{{ old('subject') }}" class="text-sm md:text-lg">
            <label for="message" class="p-1">Message</label>
            <textarea name="message" id="message"> {{ old('message') }}</textarea>
            <button type="submit" class="border-[#14532d] text-md md:text-lg
                 invalid:border-pink-900 w-full max-w-38 mx-auto mt-2 bg-[#14532d] hover:bg-green-800 text-amber-50">Send</button>
        </form>
    </div>
</div>

@endsection
