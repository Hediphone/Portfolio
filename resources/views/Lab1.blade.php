@extends('Components.Layout')

@php
    $title = 'Lab 1';
@endphp

@push('styles')
    <link href="{{ asset('css/Lab.css') }}" rel="stylesheet">
@endpush

@section('body-class', 'projects')

@section('content')
<section id="Content" class="container">

    <div id="lab1" class="Lab_Content">
        <h1>Lab 1: Setup</h1>
        
        <div class="img_container">
            <img id="lab1_img" class="projects_img" src="../images/Laiza First Laravel Project.png" alt="lab1">
        </div>

        <div class="text_container">
            <h2>Description</h2>
            <p>
                In this lab, the instructions included installing Laravel and its dependencies, creating a new Laravel
                project, setting up the database connection, and creating basic views and routes. Additionally, the
                process and the project's structure were to be documented.
            </p>
        </div>

        <div class="text_container">
            <h2>Summary</h2>
            <p>
                In this lab, I learned how to create my first Laravel project, FirstProject, by installing Laravel
                via Composer and configuring the environment settings.
                I set up a Git repository called WebDev to manage my project, where I initialized the repository,
                tracked changes, and uploaded files to GitHub, emphasizing the importance of version control.
                Additionally, I developed three views—Home, About, and Content—using Blade templates to render
                dynamic HTML.
                Finally, I defined routes in the routes/web.php file, linking user requests to specific views, which
                taught me how routing manages application flow and user interactions.
            </p>
            <a href="{{ asset(path: '/DOCS/BARIAS_LAB1_DOCUMENTATION.pdf') }}" target="_blank">-> View PDF Documentation</a>
            <br>
            <a href="https://github.com/Hediphone/WebDev.git" target="_blank">-> View Repository</a>
        </div>

        <div class="navigation_buttons">
            <a href="/Projects" class="back_button">Back to Projects</a>
            <a href="/Projects/Lab2" class="next_button">Next</a>
        </div>
    </div>
</section>
@endsection