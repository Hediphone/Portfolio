@extends('Components.layout')

@php
    $title = 'About Me';
@endphp

@push('styles')
    <link href="{{ asset('css/About.css') }}" rel="stylesheet">
@endpush

@section('body-class', 'about')

@section('content')
<div id="AboutMe" class="container">
    <h1>About Me</h1>
    <div class="flex_container">
        <div class="img_container">
            <div class="img_background">
                <img src="images/profile1.png">
            </div>

        </div>

        <div id="AboutMe_description" class="container">
            <p>
                As an IT student embarking on my journey in the field of technology,
                I am motivated by curiosity and a thirst for knowledge.
                While I may not have professional experience yet,
                I approach every opportunity as a chance to learn and develop new skills.
                I am committed to leveraging every learning opportunity to become a proficient IT practitioner,
                ready to tackle the challenges of the ever-evolving tech landscape.
            </p>


            <p class="title"> Skills </p>

            <div class="skills">
                <ul>
                    <li>
                        <p><span class="pre">Design : </span>Figma, Canva</p>
                    </li>
                    <li>
                        <p><span class="pre">Front-End : </span>HTML, CSS</p>
                    </li>
                    <li>
                        <p><span class="pre">Back-End : </span>C, Java</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="Education" class="container">
    <h2>Education</h2>

    <div class="container">
        <table>
            <tr>
                <th>Grade</th>
                <th>School</th>
                <th>Year Studied</th>
            </tr>

            <tr>
                <td>Kindergarten</td>
                <td>Tabaco Creative Learning Center</td>
                <td>2008-2010</td>
            </tr>

            <tr>
                <td>Elementary</td>
                <td>Tabaco South Central Elementary Schoool</td>
                <td>2010-2016</td>
            </tr>

            <tr>
                <td>High School</td>
                <td>Tabaco National High School</td>
                <td>2016-2022</td>
            </tr>

            <tr>
                <td>College</td>
                <td>Bicol University</td>
                <td>2022-present</td>
            </tr>
        </table>
    </div>
</div>

<div id="Hobbies" class="container">
    <h2>Hobbies</h2>

    <div class="black_container">
        <h3>Reading Novels and Manhwas/Mangas</h3>

        <p>
            I have been a Wattpader ever since I was 11 years old.
            I have read a lot of stories, from action, to historical, romance, sci-fi, etc.
            It's amazing how it seems like I am experiencing the story first-hand when I'm reading.
            Then, when I entered high school, I discovered manhwas, manhuas and mangas.
            And, of course, I became addicted. I've come to love both written and visual stories.
            Until now, I am reading whenever I have free time.
        </p>

        <button id="Read_ShowButton" type="button" onclick=" Read_ShowTopThree()">See more</button>

        <div id="Read_HiddenContent" style="display: none;">

            <h2>My Top 3 Wattpad Stories</h2>
            <div class="imgContainer">
                <img src="images/je t'aime.jpg">
                <img src="images/island of fire.jpg">
                <img src="images/billionaire's disastrous kiss.jpg">
            </div>

            <h2>My Top 3 Manhwas</h2>
            <div class="imgContainer">
                <img src="images/eleceed.jpg">
                <img src="images/solo leveling.jpg">
                <img src="images/The S-classes that i raised.jpg">
            </div>

            <button type="button" onclick=" Read_HideTopThree()">See less</button>

        </div>
    </div>

    <div class="black_container">
        <h3>Watching Anime</h3>

        <p>
            There's something special about anime shows that movies and dramas don't have.
        </p>

        <button id="Watch_ShowButton" type="button" onclick="Watch_ShowTopThree()">See more</button>

        <div id="Watch_HiddenContent" style="display: none;">

            <h2>My Top 3 Anime</h2>
            <div class="imgContainer">
                <img src="images/Death Note.jpg">
                <img src="images/Hunter x Hunter.jpg">
                <img src="images/One Piece.jpg">
            </div>

            <button type="button" onclick="Watch_HideTopThree()">See less</button>
        </div>
    </div>
</div>
@endsection

<script>
    function Read_ShowTopThree() {
        document.getElementById('Read_ShowButton').style.display = 'none';
        document.getElementById('Read_HiddenContent').style.display = 'block';
    }

    function Read_HideTopThree() {
        document.getElementById('Read_HiddenContent').style.display = 'none';
        document.getElementById('Read_ShowButton').style.display = 'block';
    }
</script>

<script>
    function Watch_ShowTopThree() {
        document.getElementById('Watch_ShowButton').style.display = 'none';
        document.getElementById('Watch_HiddenContent').style.display = 'block';
    }

    function Watch_HideTopThree() {
        document.getElementById('Watch_HiddenContent').style.display = 'none';
        document.getElementById('Watch_ShowButton').style.display = 'block';
    }
</script>