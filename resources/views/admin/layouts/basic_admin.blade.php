<!Doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dakotel Admin</title>

  <!-- Fonts -->
 
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


  <link rel="stylesheet" href="{{ asset('materialize/css/materialize.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/lesFonts.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/basic_admin.css') }}"> 
  @yield('section_for_other_css')
</head>

<body>

  <header>

    <nav class="top-nav">

      <div class="container-fluid" id="mmm">
        <div class="nav-wrapper hide-on-md-down">
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a> {{--
          <ul class="right ">
            <li><a class="waves-effect waves-light modal-trigger" href="{{ route('login') }}"><i class="material-icons left">account_box</i>Login</a></li>
            <li><a class="waves-effect waves-light modal-trigger" href="{{ route('register') }}"><i class="material-icons left">account_box</i>{{ __('Register') }}</a></li>
          </ul> --}}

          <div class="row">
            <div class=""> {{-- col s12 m10 offset-m1--}}
              <h5 class="header" style="display: inline-block; font-family: Lobster; padding-left: 20px;">Dakotel ---- Admin Master</h5>
              <ul class="right ">
                <li><a class="waves-effect waves-light modal-trigger" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="material-icons left">account_box</i>Deconnexion</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>

                <li><a class="dropdown-trigger" href="#!" data-target="dropdown-lang"><i class="material-icons left">language</i>Language<i class="material-icons right">arrow_drop_down</i></a></li>
                <ul id="dropdown-lang" class="dropdown-content">
                  <li><a>french</a></li>
                  <li><a>English</a></li>
                </ul>

              </ul>
            </div>
          </div>

        </div>
      </div>
    </nav>

    <ul id="slide-out" class="sidenav sidenav-fixed">
      <li>
        <div class="user-view">
          <div class="background">
              <img src="{{ asset('images/images_services/reservation_chambre.jpg') }}" style="width: 100%;">
          </div>
          <a href="Fun_course"><img class="circle" src="{{ asset('/images/adult-athlete-business.jpg')}}" style="width: 100px;"></a>
          <a><span class="white-text name">{{-- {{ Auth::user()->name }} --}} Dakotel administrator </span></a>
          <a><span class="white-text email">{{-- {{ Auth::user()->email }} --}} </span></a>
        </div>
      </li>

      <li><a id="lienHome" class="waves-effect waves-teal sidenav-close" href="{{ route('homeAdmin') }}"><i class="material-icons">home</i>Home Admin</a></li>
      <li><a id="lienProfil" class="waves-effect waves-teal sidenav-close" href=""><i class="material-icons">person</i>Profil</a></li>
      <li>
        <div class="divider"></div>
      </li>


      <ul class="collapsible">
        {{-- <li>
          <a class="waves-effect waves-teal collapsible-header">Trading<i class="material-icons">library_books</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="" class="sidenav-close">Lessons</a></li>
              <li><a href="#!" class="sidenav-close">Videos</a></li>
            </ul>
          </div>
        </li> --}}

        <li>
          <a class="waves-effect waves-teal collapsible-header sidenav-close" href="{{ route('manager_chambres.index') }}"><i class="material-icons">place</i><Map>Manager chambres</Map></a>
        </li>

        <li>
          <a id="lienTutoriels" class="waves-effect waves-teal collapsible-header sidenav-close"><i class="material-icons">ondemand_video</i>Manager apparts</a>
        </li>

        <li>
          <a id="lienForum" class="waves-effect waves-teal collapsible-header sidenav-close"><i class="material-icons">forum</i>Manager salles</a>
        </li>

       {{--  <li>
          <a id="lienMembers" class="waves-effect waves-teal collapsible-header sidenav-close"><i class="material-icons">people</i>Membres</a>
        </li> --}}

        <li>
          <a id="lienMembers" class="waves-effect waves-teal collapsible-header sidenav-close" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <i class="material-icons">account_box</i>Deconnexion</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>

      </ul>

    </ul>
  </header>

  <main style="/*background-color: blue;*/" >

    @yield('contentCadre')
  </main>


  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
  <script src="{{ asset('js/admin/basic_admin.js') }}"></script>

  @yield('section_for_other_js')
</body>

</html>