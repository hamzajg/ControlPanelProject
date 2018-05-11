<header class="main-header">
  <!-- Logo -->
  <a href="{{ url('/') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>C</b>Art</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Cre</b>Art</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="{{route('app.profil')}}" >
            <img src="{{asset(Auth::user()->img())}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{Auth::user()->name}}</span>
          </a>
      </li>
      <li class="dropdown user user-menu">
          <a href="{{URL('/')}}" >
            Accueil
          </a>
      </li>
      <li class="dropdown user user-menu">
          <a href="{{ route('logout') }}" class="btn btn-danger btn-sm"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i>
                Déconnexion
          </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form> 


      </li>
    </ul>
  </div>
</nav>
</header>