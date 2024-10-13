@extends('Components.layout')

@php
    $title = 'Welcome';
@endphp

@section('content')
    <div id="Contact" class="container">
        <form action="">
            <div class="form-group">
                <input type="text" name="name" id="name" class="form-input" placeholder="Enter your name" required>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="form-button">Submit</button>
            </div>
        </form>
    </div>
@endsection