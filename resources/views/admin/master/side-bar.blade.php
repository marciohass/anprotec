<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="../../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">
            Admin
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <!--<img src="../../../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
            <i class="fas fa-user-circle fa-3x" style="color: dimgrey"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
        <div class="image"><a href="/logout"><i class="fas fa-power-off fa-2x" style="color: #01ff70"></i></a></div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/home" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.lista-usuarios') }}" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>
                        Cadastro de usuários
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.lista-inscritos') }}" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>
                        Inscritos
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.lista-associados') }}" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>
                        Associados
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.lista-nao-associados')}}" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>
                        Não associados
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
