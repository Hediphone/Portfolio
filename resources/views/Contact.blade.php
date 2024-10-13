@extends('Components.Layout')

@php
    $title = 'Contact Me';
@endphp

@push('styles')
    <link href="{{ asset('css/Contact.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <h1>Contact Me</h1>

        <div id="Contact" class="container">
            <form action="">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-input" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-input" placeholder="Enter your email address"
                        required>
                    <p id="emailHelp" class="form-text">Your email address won't be shared with anyone else.</p>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="textarea" placeholder="Enter message" required></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="form-button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection