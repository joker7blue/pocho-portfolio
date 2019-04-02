@extends('layouts.basic')


@section('section_for_other_css')
    <link rel="stylesheet" href="{{ asset('css/apropos.css') }}">
@endsection


@section('section_for_other_js')
    <script src="{{ asset('js/apropos.js') }}"></script>
@endsection


@section('content')
    <div class="container" style="margin-bottom: 10%;">

        <h3 style="font-family: Lobster">
             About me<br>
             <hr style="height: 4px; background-color: #e040fb; width: 20%; border: none; float: left;">
        </h3>

        <div style="clear: both;">
            <img src="{{ asset('images/georges1.jpeg') }}" style="width: 50%; height: 300px; float: left; margin-right: 15px;">

            <div style="text-align: justify; font-size: 1.5em;">
                I'm FEUNGAP FOUEJIO GEORGES, i'm a web developper, soon full stack. I'm living in Cameroon.
                Now, i'm a student in University of Dschang , Master 1 level.<br>

            </div>
        </div>


        <br><br><br>
        {{--<h3 style="font-family: Lobster; clear: both; margin-top: 1.5em;">
                Nous dennons le meilleur de nous<br>
                <hr style="height: 4px; background-color: #e040fb; width: 20%; border: none; float: left;">
           </h3>
        <div style="clear: both;">
                <img src="{{ asset('images/images_services/location_salle_fete.jpg') }}" style="width: 50%; float: right; margin-left: 15px;">
    
                <div style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit illum culpa praesentium possimus est rem voluptatum nobis velit minus optio illo asperiores mollitia accusamus ut dolor, repudiandae assumenda quae consequuntur?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vero nam voluptatibus fugit ab est harum quae. Quas minima nesciunt aut nemo porro neque voluptatum sapiente maiores repellat, iusto deleniti.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit illum culpa praesentium possimus est rem voluptatum nobis velit minus optio illo asperiores mollitia accusamus ut dolor, repudiandae assumenda quae consequuntur?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vero nam voluptatibus fugit ab est harum quae. Quas minima nesciunt aut nemo porro neque voluptatum sapiente maiores repellat, iusto deleniti.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit illum culpa praesentium possimus est rem voluptatum nobis velit minus optio illo asperiores mollitia accusamus ut dolor, repudiandae assumenda quae consequuntur?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vero nam voluptatibus fugit ab est harum quae. Quas minima nesciunt aut nemo porro neque voluptatum sapiente maiores repellat, iusto deleniti.
                </div>
            </div> --}}
    </div>

@endsection