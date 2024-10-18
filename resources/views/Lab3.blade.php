@extends('Components.Layout')

@php
    $title = 'Lab 3';
@endphp

@push('styles')
    <link href="{{ asset('css/Lab.css') }}" rel="stylesheet">
@endpush

@section('body-class', 'projects')

@section('content')
<section id="Content" class="container">

    <div id="lab3" class="Lab_Content">
        <h1>Lab 3: Layout</h1>

        <div class="img_container">
            <img id="lab3_img" class="projects_img" src="../images/lab3.png" alt="lab3">
        </div>

        <div class="text_container">
            <h2>Description</h2>
            <p>
                In this lab, the instruction was to create a layout file to define a common structure for the views and
                to create multiple Blade view files that extend this layout.
            </p>
        </div>

        <div class="text_container">
            <h2>Summary</h2>
            <p>
                In this lab, I learned how to use a layout file in Laravel to create a consistent design for my
                application.
                I made a "Components" folder in the resources/views directory and created a Layout.blade.php file
                that includes the basic HTML structure, such as headers, footers, and navigation.
                By extending this layout in three different Blade files, I was able to add specific content for each
                page while keeping the overall look the same.
                This taught me how layout files help save time and make my code cleaner.
            </p>
            <a href="{{ asset(path: '/DOCS/BARIAS_LAB3_DOCUMENTATION.pdf') }}" target="_blank">-> View PDF
                Documentation</a>
        </div>

        <div class="navigation_buttons">
            <a href="/Projects/Lab2" class="back_button">Back</a>
            <a href="/Projects/Lab4" class="next_button">Next</a>
        </div>
    </div>
</section>
@endsection