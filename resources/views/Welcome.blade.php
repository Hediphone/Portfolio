@extends('Components.layout')

@php
    $title = 'Welcome';
@endphp

@push('styles')
    <link href="{{ asset('css/Welcome.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="wrapper">
        <div class="container">
            <h1>Welcome, <span id="typed-name"></span></h1>
            <h2>Explore my portfolio to know more about me <br>and the projects I have completed!</h2>
            <button onclick="window.location.href='{{ url('/Home') }}'">Go</button>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed('#typed-name', {
        strings: ["{{ $name }}"],  
        typeSpeed: 100,            
        backSpeed: 50,             
        loop: true,                
        backDelay: 1000,           
        startDelay: 500,           
        loopCount: Infinity,       
        showCursor: true,          
        cursorChar: '|',           
    });
</script>
@endpush
