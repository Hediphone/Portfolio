@extends('Components.Layout')

@php
    $title = 'Projects';
@endphp

@push('styles')
    <link href="{{ asset('css/Projects.css') }}" rel="stylesheet">
@endpush

@section('body-class', 'projects')

@section('content')
<div class="container">
    <h1>Projects</h1>

    <div id="Projects" class="container">
        <div class="myProjects">
            <h2>Figma</h2>
            <img id="Figma" class="projects_img" src="images/Login_Page.jpeg" alt="Login Page">
            <p id="FigmaProjectName">Login Page</p>
            <button type="button"
                onclick="document.getElementById('Figma').src='images/Login_Page.jpeg'; document.getElementById('FigmaProjectName').innerHTML = 'Login Page'">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button"
                onclick="document.getElementById('Figma').src='images/Online_Food_and_Delivery_System.jpeg'; document.getElementById('FigmaProjectName').innerHTML = 'Online Food and Delivery System'">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="myProjects">
            <h2>Java (Netbeans)</h2>
            <img id="Java" class="projects_img" src="images/String_Operations.jpeg" alt="String Operations">
            <p id="JavaProjectName">String Operations</p>
            <button type="button"
                onclick="document.getElementById('Java').src='images/String_Operations.jpeg'; document.getElementById('JavaProjectName').innerHTML = 'String Operations'">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button"
                onclick="document.getElementById('Java').src='images/Bank_Account_Management_System.jpeg'; document.getElementById('JavaProjectName').innerHTML = 'Bank Account Management System'">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="myProjects">
            <h2>HTML and CSS</h2>
            <img id="HTML" class="projects_img" src="images/Website_Login.jpeg" alt="Website Login Page">
            <p id="HTMLProjectName">Website Login Page</p>
            <button type="button"
                onclick="document.getElementById('HTML').src='images/Website_Login.jpeg'; document.getElementById('HTMLProjectName').innerHTML = 'Website Login Page'">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button"
                onclick="document.getElementById('HTML').src='images/Portfolio.png'; document.getElementById('HTMLProjectName').innerHTML = 'Personal Portfolio'">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<div class="container">
    <section id="Projects" class="container">
        <div class="myProjects">
            <h2>Laravel</h2>
            <a href="#lab1">
                <img id="lab1_img" class="projects_img" src="images/Laiza First Laravel Project.png" alt="Login Page">
            </a>
            <p id="lab1Name">Lab 1: Setup</p>
        </div>

        <div class="myProjects">
            <h2>Laravel</h2>
            <a href="#lab2"><img id="lab2_img" class="projects_img" src="images/Jet Gaming Hub.png"
                    alt="Jet Gaminh Hub Website"></a>
            <p id="lab2Name">Lab 2: Routes</p>
        </div>

        <div class="myProjects">
            <h2>Laravel</h2>
            <a href="#lab3"><img id="lab3_img" class="projects_img" src="images/lab3.png" alt="Lab 3"></a>
            <p id="lab3Name">Lab 3: Layout</p>
        </div>

        <div class="myProjects">
            <h2>Laravel</h2>
            <a href="#lab4"><img id="lab4_img" class="projects_img" src="images/lab4.png" alt="lab4"></a>
            <p id="lab4Name">Lab 4: Middleware</p>
        </div>
    </section>

    <section id="Content" class="container">

        <div id="lab1" class="Lab_Content">
            <div class="img_container">
                <img id="lab1_img" class="projects_img" src="images/Laiza First Laravel Project.png"
                    alt="Jet Gaminh Hub Website">
            </div>
            <div class="text_container">
                <h2>Lab 1: Setup</h2>
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
            </div>
        </div>

        <div id="lab2" class="Lab_Content">
            <div class="img_container">
                <img id="lab2_img" class="projects_img" src="images/Jet Gaming Hub.png" alt="Jet Gaminh Hub Website">
            </div>
            <div class="text_container">
                <h2>Lab 2: Routes</h2>
                <p>
                    In this lab, I learned how to create a form in Laravel that takes a username from an input field
                    instead of using route parameters.
                    When users enter their usernames and submit the form, the app shows a welcome message like "Welcome,
                    johndoe!"
                    If no username is entered, it displays a default message, "Welcome, Guest!" This helped me
                    understand how to make my application more interactive by handling user input.
                </p>
                <a href="{{ asset(path: '/DOCS/BARIAS_LAB2_DOCUMENTATION.pdf') }}" target="_blank">-> View PDF Documentation</a>
            </div>
        </div>

        <div id="lab3" class="Lab_Content">
            <div class="img_container">
                <img id="lab3_img" class="projects_img" src="images/lab3.png" alt="Jet Gaminh Hub Website">
            </div>
            <div class="text_container">
                <h2>Lab 3: Layout</h2>
                <p>
                    In this lab, I learned how to use a layout file in Laravel to create a consistent design for my
                    application.
                    I made a "Components" folder in the resources/views directory and created a Layout.blade.php file
                    that includes the basic HTML structure, such as headers, footers, and navigation.
                    By extending this layout in three different Blade files, I was able to add specific content for each
                    page while keeping the overall look the same.
                    This taught me how layout files help save time and make my code cleaner.
                </p>
                <a href="{{ asset(path: '/DOCS/BARIAS_LAB3_DOCUMENTATION.pdf') }}" target="_blank">-> View PDF Documentation</a>
            </div>
        </div>

        <div id="lab4" class="Lab_Content">
            <div class="img_container">
                <img id="lab4_img" class="projects_img" src="images/lab4.png" alt="Jet Gaminh Hub Website">
            </div>
            <div class="text_container">
                <h2>Lab 4: Middleware</h2>
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
                <a href="{{ asset(path: '/DOCS/BARIAS_LAB4_DOCUMENTATION.pdf') }}" target="_blank">-> View PDF Documentation</a>
            </div>
        </div>
    </section>
</div>
@endsection