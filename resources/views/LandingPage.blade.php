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
        <h1>Please enter your name before proceeding.</h1>
            <form action="{{ url('/Welcome') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-input" placeholder="Enter your name" required>
                </div>

                <div id="name_error">
                    Only alphabetic characters are allowed.
                </div>

                <div class="form-actions">
                    <button type="submit" class="form-button">Submit</button>
                </div>

                <p>or</p>

                <div class="form-actions">
                    <button type="button" onclick="window.location.href='{{ url(path: '/Guest') }}'">Continue as
                        Guest</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            const nameInput = document.querySelector('input[name="name"]');
            const name = nameInput.value; 

            if (!/^[A-Za-z]+$/.test(name)) {
                e.preventDefault(); 
                document.getElementById('name_error').classList.add('show'); // Show the error message
            } else {
                document.getElementById('name_error').classList.remove('show'); // Hide the error message
            }
        });
    </script>
@endpush