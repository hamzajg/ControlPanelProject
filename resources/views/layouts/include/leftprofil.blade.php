
<div class="col-md-3">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        @if(!empty($user->id))
        <div class="profile-userpic">
          <img src="{{asset($user->img() ) }}" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
         <center>
           <div class="profile-usertitle-name">
           <h1>{{$user->fullname()}}</h1>
          </div>
          <div class="profile-usertitle-job">
            {{$user->email}}
          </div>
         </center>
        </div>
        @else
        <div class="profile-userpic">
          <img src="{{asset(Auth::user()->img() ) }}" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
         <center>
           <div class="profile-usertitle-name">
           <h1>{{Auth::user()->fullname()}}</h1>
          </div>
          <div class="profile-usertitle-job">
            {{Auth::user()->email}}
          </div>
         </center>
        </div>
        @endif
        <div><br></div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
          <center>
            <a href="{{route('app.parametre')}}" class="btn btn-success btn-sm">Paramétre</a>
             
                <a href="{{ route('logout') }}" class="btn btn-danger btn-sm"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i>
                Déconnexion
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form> 
            
          </center>
        </div>
       <div>
         <br>
       </div>
        <div class="profile-usermenu">
          <ul class="nav">
            <li class="active">
              <a href="{{URL('/')}}">
              <i class="glyphicon glyphicon-home"></i>
              Acceuil </a>
            </li>
            <li>
              <a href="{{route('app.profil')}}">
              <i class="glyphicon glyphicon-user"></i>
              Profile </a>
            </li>
            @if(Auth::user()->role == false)
            <li>
              <a href="{{route('post.create')}}">
              <i class="glyphicon glyphicon-user"></i>
              Ajout article </a>
            </li>
            @endif           
            <li>
              <a href="{{route('post.index')}}">
              <i class="glyphicon glyphicon-flag"></i>
              Mes articles </a>
            </li>
          </ul>
        </div> 
      </div>
    </div>