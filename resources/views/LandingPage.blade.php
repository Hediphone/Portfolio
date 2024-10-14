@extends('Components.Layout')

@php
    $title = 'Landing Page';
@endphp

@push('styles')
    <link href="{{ asset('css/LandingPage.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="wrapper">
    <div class="container">
        <form action="{{ url('/Welcome') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" id="name" class="form-input" placeholder="Enter your name" required>
            </div>
    
            <div class="form-actions">
                <button type="submit" class="form-button">Submit</button>
            </div>

            <p>or</p>

            <div class="form-actions">
                <button type="button" onclick="window.location.href='{{ url(path: '/Guest') }}'">Continue as Guest</button>
            </div>
        </form>
    </div>
</div>
@endsection
