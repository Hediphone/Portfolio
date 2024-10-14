@extends('Components.Layout')

@php
    $title = 'Home';
@endphp

@section('body-class', 'home')

@section('content')
    <div id="Banner" class="container">
        <div id="bannerName" class="container">
            <p id="Name" class="banner_name">Laiza Barias</p>
            <p class="banner_profession"><b>Student <span class="auto_type gradient-text"></span></b></p>
        </div>

        <div class="banner_img_container">
            <img class="banner_img" src="images/profile.png" alt="Profile Picture">
        </div>

        <div class="container">
            <div class="container">
                <p class="banner_description">
                    Welcome to my personal portfolio! <br>
                    Feel free to browse through my portfolio to <br>
                    catch a glimpse of my journey in the field of <br>
                    Information Technology.
                </p>
            </div>

            <div id="Links" class="container">
                <div id="icons" class="container">
                    <a href="https://www.facebook.com/laizamae.barias?mibextid=ZbWKwL">
                        <img class="icons" src="icons/facebook.svg" alt="Facebook">
                    </a>

                    <a href="https://github.com/Hediphone">
                        <img class="icons" src="icons/github.svg" alt="Github">
                    </a>
                </div>

                <div id="Contacts" class="container">
                    <div id="Contact" class="container">
                        <img class="contact" src="icons/phone-solid.svg" alt="Phone">
                        <p>09055454558</p>
                    </div>

                    <div id="Contact" class="container">
                        <img class="contact" src="icons/envelope-solid.svg" alt="Email">
                        <p>lmbarias.ph@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // auto type
            var typed = new Typed('.auto_type', {
                strings: ["Programmer", "Programmer"],
                typeSpeed: 100,
                backSpeed: 100,
                loop: true
            })
            
            const nameElement = document.getElementById('Name');

            nameElement.addEventListener('mouseover', function () {
                this.style.fontFamily = 'Honk';
                this.style.fontSize = '62px';
            });

            nameElement.addEventListener('mouseout', function () {
                this.style.fontFamily = 'Poppins';
                this.style.fontSize = '50px';
            });
        });
    </script>
@endpush
