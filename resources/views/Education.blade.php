@extends('Components.layout')

@php
    $title = 'Education';
@endphp

@push('styles')
    <link href="{{ asset('css/Education.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <h1>Education</h1>

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
@endsection