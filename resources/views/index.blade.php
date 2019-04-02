@extends('layouts.basic')


@section('section_for_other_css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('section_for_other_js')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection


@section('content')
<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">

    <div style="position: relative; top: 0px; left: 0px; width: 100%; height: 600px;">
          <div class="" id ="conteneurPanoramaAnim">
            <div class="imgPanorama"></div>
            <div class="imgPanorama"></div>
            <div class="imgPanorama"></div>
          </div>
          <div id="contentDivWithBacground">
  
            <div id="msgInContentDivWithBacground" class="row">
              
              <div>
                  <!--<h1 style="font-size: 5em; text-align: center;">
                      Hotel Dakotel 
                      <hr style="height: 2px; background-color: white; width: 10%;">
                    </h1>-->

                    <p style="text-align: center;">
                      <img src="{{ asset('images/georges1.jpeg') }}" style="width: 250px; height: 250px; border-radius: 50%; border: 1px solid transparent;">
                    </p>

                <p style="font-size: 1.8em; text-align: center; padding: 0 20%; font-family: Oswald;">
                 Hi, I'm Fouejio Georges! I'm a web developper, soon fullstack.
              </p>
              </div>
  
            </div>
          </div>
    </div>
  
    
  
      <br><br><br><br>    
      <!-- SECTIONS FOR DOMAINS -->
    <h3 style="text-align: center;"> 
        What can i do?
        <hr style="height: 4px; background-color: #e040fb; width: 10%; border: none;">
    </h3>

    <p style="text-align: center; font-size: 1.5em; width: 50%; margin: 0 auto">
      Below, there is something that i'm able to do. That is not an exhaustive list. I have also some skills about databases, versionning with git, cloud computing.
    </p>

    <br>
    <div class="container">
      <div class="row">
              <div class="col s12 m4">
                <div class="service-block">
                  <img src="{{ asset('images/HTML-CSS-05.png') }}" style="width: 100%;">
                  <h5 class="center">HTML5/CSS3</h5>
    
                
                </div>
              </div>
    
              <div class="col s12 m4">
                <div class="service-block">
                  <img src="{{ asset('images/javascript_jquery_story.jpg') }}" style="width: 100%;">
                  <h5 class="center">Javascript/Jquery</h5>
    
              
                </div>
              </div>
    
              <div class="col s12 m4">
                <div class="service-block">
                  <img src="{{ asset('images/Angular-node-js_0.png') }}" style="width: 100%;">
                  <h5 class="center">Angular/NodeJs</h5>
    
                  
                </div>
              </div>
    
      </div>
  
          <div class="row">
              <div class="col s12 m4">
                <div class="service-block">
                  <img src="{{ asset('images/artigo_bootstrap-ou-materialize.jpg') }}" style="width: 100%;">
                  <h5 class="center">Bootstrap/Materialize</h5>
  
                 
                </div>
              </div>
  
              <div class="col s12 m4">
                <div class="service-block">
                  <img src="{{ asset('images/laravel.jpg') }}" style="width: 100%;">
                  <h5 class="center">Laravel framework</h5>
  
                  
                </div>
              </div>
  
              <div class="col s12 m4">
                <div class="service-block">
                  <img src="{{ asset('images/spring-boot-java.jpg') }}" style="width: 100%;">
                  <h5 class="center">Java EE/ Spring</h5>
  
                  
                </div>
              </div>
  
            </div>
    </div>
    <!-- END DOMAINS -->
  
    <br><br>
  
    <!-- SECTION FOR HOBBIES -->
    <section class="container-fluid" id="section-hobbies">

      <div id="div-restau" style="position: relative; height: 400px; background-image: url('images/adult-banknotes-business.jpg'); background-size: 100% 100%; 
      background-attachment: fixed;">
  
        <div style="/*position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background: linear-gradient(180deg,rgba(82, 54, 238, 0.4),rgba(180, 57, 180,0.4));*/background: linear-gradient(180deg,rgba(82, 54, 238, 0.4),rgba(180, 57, 180,0.4)); height: 100%; text-align: center;">

            <br>
            <h4 class="center-align" style="color: white;"> My hobbies </h4>

            <hr style="height: 4px; background-color: #e040fb; width: 5%; border: none;">
            <br>

            <div class="carousel carousel-slider center" style="width: 80%; height: 450px; z-index: 1000; margin: 0 auto;">

                <div class="carousel-item green white-text" href="#three!">
                    <img src="{{ asset('images/guitar-hobby.jpg') }}" style="width: 100%; height: 100%;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background: linear-gradient(180deg,rgba(82, 54, 238, 0.246),rgba(180, 57, 180, 0.198)); text-align: center;">
                      <p style="font-size: 3em; margin-top: 5em;">
                        Listen the classic music
                      </p>
                    </div>
                </div>

                <div class="carousel-item red white-text" href="#one!">
                    <img src="{{ asset('images/man-run.jpg') }}" style="width: 100%; height: 100%;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background: /*linear-gradient(180deg,rgba(82, 54, 238, 0.246),rgba(190, 47, 190, 0.37));*/">
                      <p style="font-size: 3em; margin-top: 5em;">
                        Run run run
                      </p>
                    </div>
                </div>

                <div class="carousel-item amber white-text" href="#two!">
                    <img src="{{ asset('images/book-read.jpg') }}" style="width: 100%; height: 100%;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background: linear-gradient(180deg,rgba(82, 54, 238, 0.246),rgba(180, 57, 180, 0.198));">
                      <p style="font-size: 3em; margin-top: 5em;">
                        Read
                      </p>
                    </div>
                </div>

              </div>
        </div>
  
      </div>
    </section>
    <!-- END HOBBIES -->
  
  
    <!-- FOR MEMBRES -->
    <div class="container" id="div-equipe" style="margin-top: 20em;">
      
      <div class="row center-align">
  
        <h3>
          I'm also a freelancer
          <hr style="height: 4px; background-color: #e040fb; width: 20%; border: none;">
        </h3>
  
  
      </div>

      <div class="row center-align">
  
        <h3>
          You can have trust to me!
          <hr style="height: 4px; background-color: #e040fb; width: 20%; border: none;">
        </h3>
  
  
      </div>

      <div class="row center-align">
  
        <a href=""><img src="{{ asset('images/icons/icons8-linkedin-48.png') }}" style="width: 50px; height: 50px;"></a>
        <a href=""><img src="{{ asset('images/icons/icons8-facebook-48.png') }}" style="width: 50px; height: 50px;"></a>
        <a href=""><img src="{{ asset('images/icons/icons8-twitter-48.png') }}" style="width: 50px; height: 50px;"></a>
        <a href=""><img src="{{ asset('images/icons/icons8-instagram-48.png') }}" style="width: 50px; height: 50px;"></a>

      </div>
  
    </div>

<div>
@endsection