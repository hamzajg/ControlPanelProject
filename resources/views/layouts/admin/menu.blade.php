<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset(Auth::user()->img())}}" class="img-circle" alt="User Image" style="max-width: 50px;">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
         <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
          <a href="{{route('admin.post.index')}}">
            <i class="fa fa-dashboard"></i> <span>Gestion des articles</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('admin.categorie.index')}}">
            <i class="fa fa-fw fa-file-photo-o"></i> <span>Gestion des catégories</span>
          </a>
        </li>

        <li class="treeview">
          <a href=""><i class="fa fa-fw fa-user"></i> <span>Gestion des utilisateurs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.user.index')}}"><i class="fa fa-circle-o text-red"></i>Gestion des utilisateurs</a></li>
            
            <li><a href="{{route('admin.admin.index')}}"><i class="fa fa-circle-o text-red"></i>Gestion des administrateurs</a></li>
          </ul>
        </li> 

        <li class="treeview">
          <a href="{{route('admin.enchere.index')}}">
            <i class="fa fa-fw fa-gavel"></i> <span>Gestion des enchères</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('admin.commande.index')}}">
            <i class="fa fa-fw fa-shopping-cart"> </i><span>Gestion des commandes</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>