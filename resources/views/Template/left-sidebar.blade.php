<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">GuyupRukunSentul</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">AgungPrayogi</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- admin sdiebar navigasion
            extends Template.left-sidebar
            -->
          @if(auth()->user()->level=="ketua")
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
                <p>Home</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Member
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
        
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('daftarMember')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('register')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
            </ul>
          
          </li>
          <li class="nav-item menu-open">
           
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('kalender')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>kalender</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('upload')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar pencapaian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>laporan keuangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('inbox')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pesan</p>
                </a>
              </li>
            </ul>
          </li>
          @endIf()

        <!-- bendahara -->
        @if(auth()->user()->level == "bendahara")
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
                <p>Home</p>
            </a>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
             Keuangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arisan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Guyup rukun peduli</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('upload')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload</p>
                </a>
              </li>
            </ul>
          </li>
          @endif()
          @if(auth()->user()->level=="sekertaris")
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
                <p>Home</p>
            </a>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
             Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arisan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pesan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('upload')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengumuman</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(auth()->user()->level == "anggota")
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
                <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('upload')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
                <p>Upload</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('inbox')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
                <p>pesan</p>
            </a>
          </li>
          @endif
          <li class="nav-item bg-danger">
                <a href="{{route('logout')}}" class="nav-link"> 
                  <p>Logout</p>
                </a>
          </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>