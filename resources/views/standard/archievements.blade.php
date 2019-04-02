@extends('layouts.basic')


@section('section_for_other_css')
    <link rel="stylesheet" href="{{ asset('css/archievements.css') }}">
@endsection


@section('section_for_other_js')
    <script src="{{ asset('js/archievements.js') }}"></script>
@endsection


@section('content')
    <div class="container" >

        <h3 style="font-family: Lobster">
             Archievements
             <br>
             <hr style="height: 4px; background-color: #e040fb; width: 20%; border: none; float: left;">
        </h3>
<p style="clear: both;"></p>
        <div>
            <img src="{{ asset('images/dakotel index.PNG') }}" style="width: 50%; float: left; margin-right: 15px;">

            <div style="text-align: justify; font-size: 1.5em;">
                Website Hotel.
                <br>

            </div>
        </div>

        <p style="clear: both;"></p>

        <br>
        <h2 style="text-align: center;"> Other are coming soon. </h2>
    </div>

@endsection