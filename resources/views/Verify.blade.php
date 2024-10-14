@extends('Components.Layout')

@php
    $title = 'Verify Age';
@endphp

@push('styles')
    <link href="{{ asset('css/Verify.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <h1>This page is age-restricted. <br>
            Please enter your age in order to verify if you meet the age requirement.</h1>
        <form action="{{ url('/verify-age') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="age" id="age" class="form-input" placeholder="Enter your age" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="form-button">Submit</button>
            </div>
        </form>
    </div>
@endsection