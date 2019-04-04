{{-- <div class="navbar-fixed" style="background-color: black; font-size: 13px; color: white; width: 100%; z-index: 10000;">
        <span><i class="material-icons">phone</i>+237689878987/ 698987877</span>
        &nbsp;&nbsp;
        <span><i class="material-icons">mail</i>dakotel@gmail.com</span>
    </div> --}}
<div class="navbar-fixed" style="z-index: 10000;">
    
    <nav id="my-nav" style="border: none; box-shadow: 0px 0px 0px transparent;">
        
      <div class="nav-wrapper">
        <a href="/" class="brand-logo">Fouejio Georges</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <!--<li><a href="#" data-target="slide-out"><i class="material-icons">menu</i></a></li>-->
          <li><a href="/"><i class="material-icons left">home</i>Home</a></li>
          <li><a href="{{ route('archivements') }}"><i class="material-icons left">library_books</i>Achievements</a></li>
          <li><a href="{{ route('apropos') }}"><i class="material-icons left">person</i>About</a></li>
          <li><a href="{{ route('contact') }}"><i class="material-icons left">contact_mail</i>Contact</a></li>
          
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo" style="background-color: black;">

          <li><a href="/"><i class="material-icons left white-text">home</i>Home</a></li>
          <li><a href="{{ route('archivements') }}"><i class="material-icons left white-text">library_books</i>Achievements</a></li>
          <li><a href="{{ route('apropos') }}"><i class="material-icons left white-text">person</i>About</a></li>
          <li><a href="{{ route('contact') }}"><i class="material-icons left white-text">contact_mail</i>Contact</a></li>
    </ul>
  </div>

  
