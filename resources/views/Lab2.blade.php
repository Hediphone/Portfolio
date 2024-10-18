@extends('Components.Layout')

@php
    $title = 'Lab 2';
@endphp

@push('styles')
    <link href="{{ asset('css/Lab.css') }}" rel="stylesheet">
@endpush

@section('body-class', 'projects')

@section('content')
<section id="Content" class="container">

    <div id="lab2" class="Lab_Content">
        <h1>Lab 2: Routes</h1>

        <div class="img_container">
            <img id="lab2_img" class="projects_img" src="../images/Jet Gaming Hub.png" alt="lab2">
        </div>

        <div class="text_container">
            <h2>Description</h2>
            <p>
                This lab focuses on creating basic routes in Laravel, including handling parameters and implementing
                redirection. The task also includes documenting the implementation with detailed explanations and
                screenshots.
            </p>
        </div>

        <div class="text_container">
            <h2>Summary</h2>
            <p>
                In this lab, I learned how to create a form in Laravel that takes a username from an input field
                instead of using route parameters.
                When users enter their usernames and submit the form, the app shows a welcome message like "Welcome,
                johndoe!"
                If no username is entered, it displays a default message, "Welcome, Guest!" This helped me
                understand how to make my application more interactive by handling user input.
            </p>
            <a href="{{ asset(path: '/DOCS/BARIAS_LAB2_DOCUMENTATION.pdf') }}" target="_blank">-> View PDF
                Documentation</a>
        </div>

        <div class="navigation_buttons">
            <a href="/Projects/Lab1" class="back_button">Back</a>
            <a href="/Projects/Lab3" class="next_button">Next</a>
        </div>
    </div>
</section>
@endsection