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
            <input type="text" name="age" id="age" class="form-input" min="1" max="100" placeholder="Enter your age"
                required>
        </div>

        <div id="age_error">
            Please enter a valid age.
        </div>

        <div class="form-actions">
            <button type="submit" class="form-button">Submit</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    document.querySelector('form').addEventListener('submit', function (e) {
        const ageInput = document.querySelector('#age');
        const age = ageInput.value;

        if (!/^\d+$/.test(age) || age < 1 || age > 100) {
            e.preventDefault(); 
            document.getElementById('age_error').classList.add('show'); 
            ageInput.focus(); 
        } else {
            document.getElementById('age_error').classList.remove('show'); 
        }
    });
</script>
@endpush