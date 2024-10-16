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
            <a href="/Projects/Lab1">
                <img id="lab1_img" class="projects_img" src="images/Laiza First Laravel Project.png" alt="lab1">
            </a>
            <p id="lab1Name">Lab 1: Setup</p>
        </div>

        <div class="myProjects">
            <h2>Laravel</h2>
            <a href="/Projects/Lab2"><img id="lab2_img" class="projects_img" src="images/Jet Gaming Hub.png"
                    alt="lab2"></a>
            <p id="lab2Name">Lab 2: Routes</p>
        </div>

        <div class="myProjects">
            <h2>Laravel</h2>
            <a href="/Projects/Lab3"><img id="lab3_img" class="projects_img" src="images/lab3.png" alt="Lab 3"></a>
            <p id="lab3Name">Lab 3: Layout</p>
        </div>

        <div class="myProjects">
            <h2>Laravel</h2>
            <a href="/Projects/Lab4"><img id="lab4_img" class="projects_img" src="images/lab4.png" alt="lab4"></a>
            <p id="lab4Name">Lab 4: Middleware</p>
        </div>
    </section>
</div>
@endsection