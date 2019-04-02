@extends('layouts.basic') 
@section('section_for_other_css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
 
@section('section_for_other_js')
<script src="{{ asset('js/contact.js') }}"></script>
@endsection
 
@section('content')

<div class="container" style="margin-bottom: 10%;">

    @if (session('message'))
        <div class="card-panel center-align  green darken-1" style="font-size: 1.5em; color: white;">
            {{ session('message') }}
        </div>
    @endif

    <h3>
        Contacting me is very easy!
        !<br>
        <hr style="height: 4px; background-color: #e040fb; width: 20%; border: none; float: left;">
    </h3>
    <br style="clear: both;">
    <div>
        <img src="{{ asset('images/contact.jpg') }}" style="width: 50%; height: 300px; float: left; margin-right: 15px;">

        <div style="text-align: justify; font-size: 1.5em;">
            
            <p>
                You can contact me through my phone, or my Gmail.
            </p>

            <p>
                <strong>Tel:</strong> +237 698787847/ 678789870<br>
                <strong>Mail:</strong> legrandgeorges53@gmail.com
            </p>
        </div>
    </div>
</div>

<div style="clear: both;"></div>
<br><br><br>
<div class="container-fluid">
    <div class="container" style="transform: skewY(3deg);">
        <div class="row">
            <h3 class="center-align" style="color: white;">
                Send me a mail!<br>
                <hr style="height: 4px; background-color: #e040fb; width: 20%; border: none;">
            </h3>

            <form class="col m12" method="POST" action="{{ route('senMailToMe') }}">
                @csrf
                <div class="row">
                    <div class="col m6">
                        <label><strong>Nom *</strong></label>
                        <input class="browser-default input-text-perso" name="nom" type="text"> {!! $errors->first('nom',
                        '<span style="color: red;">:message</span>') !!}
                    </div>
                    <div class="col m6">
                        <label><strong>Prenom *</strong></label>
                        <input class="browser-default input-text-perso" name="prenom" type="text"> {!! $errors->first('prenom',
                        '<span style="color: red;">:message</span>') !!}
                    </div>
                </div>

                <div class="row">

                    <div class="col m12">
                        <label><strong>Your mail adress*</strong></label>
                        <input class="browser-default input-text-perso" name="mail" type="text"> {!! $errors->first('mail',
                        '<span style="color: red;">:message</span>') !!}
                    </div>

                </div>

                <div class="row">

                    <div class="col m12">
                        <label><strong>Message *</strong></label>
                        <textarea class="browser-default input-text-perso" rows="20" name="message" style="background-color: white;">
                    </textarea> {!! $errors->first('message', '<span style="color: red;">:message</span>')
                        !!}
                    </div>

                </div>

                <div class="row">

                    <div class="col m12">
                        <button class="button-perso purple accent-2" type="submit">Send</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection