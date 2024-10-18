@extends('Components.Layout')

@php
    $title = 'Lab 4';
@endphp

@push('styles')
    <link href="{{ asset('css/Lab.css') }}" rel="stylesheet">
@endpush

@section('body-class', 'projects')

@section('content')
<section id="Content" class="container">

    <div id="lab4" class="Lab_Content">
        <h1>Lab 4: Middleware</h1>

        <div class="img_container">
            <img id="lab4_img" class="projects_img" src="../images/lab4.png" alt="lab4">
        </div>

        <div class="text_container">
            <h2>Description</h2>
            <p>
                This lab focuses on creating and registering middleware in Laravel. The task involves implementing
                functionality to check user age and log requests, assigning middleware to routes, and documenting the
                work.
            </p>
        </div>

        <div class="text_container">
            <h2>Summary</h2>
            <p>
                In this lab, I learned how to create and register middleware in Laravel.
                I made two middleware: CheckAge, which checks if a user's age is 18 or older and redirects to an
                "Access Denied" page if not, and LogRequests, which logs HTTP request details to a file called
                log.txt.
                I registered these middleware in the app/Http/Kernel.php file for global and route-specific use.
                I also created a route group that applied the CheckAge middleware to routes for a welcome page and a
                dashboard, allowing me to test different age values to see if the middleware worked correctly.
                This experience showed me how middleware can improve security and logging in web applications.
            </p>
            <a href="{{ asset(path: '/DOCS/BARIAS_LAB4_DOCUMENTATION.pdf') }}" target="_blank">-> View PDF
                Documentation</a>
        </div>

        <div class="navigation_buttons">
            <a href="/Projects/Lab3" class="back_button">Back</a>
            <a href="/Projects" class="back_button">Go to Projects</a>
        </div>
    </div>
</section>
@endsection