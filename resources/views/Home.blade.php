@extends('Components.layout')

@php
    $title = 'Home';
@endphp

@section('body-class', 'home')

@section('content')
    <div id="Banner" class="container">
        <div id="bannerName" class="container">
            <p id="Name" class="banner_name">Laiza Barias</p>
            <p class="banner_profession"><b>Student Programmer</b></p>
        </div>

        <script>
            document.getElementById('Name').addEventListener('mouseover', function () {
                this.style.fontFamily = 'Honk';
                this.style.fontSize = '62px';
            });

            document.getElementById('Name').addEventListener('mouseout', function () {
                this.style.fontFamily = 'Poppins';
                this.style.fontSize = '50px';
            });
        </script>

        <div class="container" style="width: 420px;">
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