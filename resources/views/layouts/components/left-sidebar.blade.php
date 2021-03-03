<aside class="main-sidebar bg-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight">GuyupRukunSentul</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block text-dark">{{auth()->user()->name}}</a>
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
         <li class="nav-item tombol  ">
            <a href="/member" class="nav-link">
              <i class="far fa-circle nav-icon text-warning"></i>
                <p class="text-white">Members</p>
            </a>
          </li>
		   <li class="nav-item menu-close">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt text-danger"></i>
              <p class="text-white">
                Activites
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview tombol">
            <li class="nav-item">
                <a href="/activity" class="nav-link ">
                  <i class="far fa-circle nav-icon text-dark"></i>
                  <p class="text-white">Activities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/activity/create" class="nav-link ">
                  <i class="far fa-circle nav-icon text-dark"></i>
                  <p class="text-white ">Upload</p>
                </a>
              </li>
            </ul>
		</li>
		          <li class="nav-item menu-close tombol" >
               <a href="/kas" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt text-dark"></i>
                  <p class="text-white">keuangan</p>
				    <i class="right fas fa-angle-left text-white"></i>
                </a>
				<ul class="nav nav-treeview tombol">
				<li class="nav-item">
					<a href="/kas" class="nav-link ">
					  <i class="far fa-circle nav-icon text-dark"></i>
					  <p class="text-white">Result</p>
					</a>
				  </li>
				</ul>
            </li>
			 <li class="nav-item tombol" >
                <a href="/message" class="nav-link">
                  <i class="far fa-circle nav-icon text-success "></i>
                  <p class="text-white">Message</p>
                </a>
              </li>
			       
          <li class="nav-item bg-dark ">
                <a href="{{route('logout')}}" class="nav-link" > 
                  <p class="text-white">Logout</p>
                </a>
          </li>
		@endif
		
		@if(auth()->user()->level=="sekertaris")
		<li class="nav-item tombol  ">
            <a href="/member" class="nav-link">
              <i class="far fa-circle nav-icon text-warning"></i>
                <p class="text-white">Members</p>
            </a>
         </li>
		  <li class="nav-item menu-close">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt text-danger"></i>
              <p class="text-white">
                Activites
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview tombol">
            <li class="nav-item">
                <a href="/activity" class="nav-link ">
                  <i class="far fa-circle nav-icon text-dark"></i>
                  <p class="text-white">Activities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/activity/create" class="nav-link ">
                  <i class="far fa-circle nav-icon text-dark"></i>
                  <p class="text-white ">Upload</p>
                </a>
              </li>
            </ul>
		</li>
		 <li class="nav-item tombol" >
                <a href="/message" class="nav-link">
                  <i class="far fa-circle nav-icon text-success "></i>
                  <p class="text-white">Message</p>
                </a>
              </li>
			       
          <li class="nav-item bg-dark ">
                <a href="{{route('logout')}}" class="nav-link" > 
                  <p class="text-white">Logout</p>
                </a>
          </li>
		@endif
		
		@if(auth()->user()->level=="bendahara")
			 <li class="nav-item menu-close">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt text-danger"></i>
              <p class="text-white">
                Activites
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview tombol">
            <li class="nav-item">
                <a href="/activity" class="nav-link ">
                  <i class="far fa-circle nav-icon text-dark"></i>
                  <p class="text-white">Activities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/activity/create" class="nav-link ">
                  <i class="far fa-circle nav-icon text-dark"></i>
                  <p class="text-white ">Upload</p>
                </a>
              </li>
            </ul>
		</li>
		          <li class="nav-item menu-close tombol" >
               <a href="/kas" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt text-dark"></i>
                  <p class="text-white">keuangan</p>
				    <i class="right fas fa-angle-left text-white"></i>
                </a>
				<ul class="nav nav-treeview tombol">
				<li class="nav-item">
					<a href="/kas" class="nav-link ">
					  <i class="far fa-circle nav-icon text-dark"></i>
					  <p class="text-white">Result</p>
					</a>
				  </li>
				<li class="nav-item">
					<a href="/kas/create" class="nav-link ">
					  <i class="far fa-circle nav-icon text-dark"></i>
					  <p class="text-white">data</p>
					</a>
				  </li>
				  
				</ul>
            </li>
			 <li class="nav-item tombol" >
                <a href="/message" class="nav-link">
                  <i class="far fa-circle nav-icon text-success "></i>
                  <p class="text-white">Message</p>
                </a>
              </li>
			       
          <li class="nav-item bg-dark ">
                <a href="{{route('logout')}}" class="nav-link" > 
                  <p class="text-white">Logout</p>
                </a>
          </li>
		@endif
		
		@if(auth()->user()->level=="anggota")
			 <li class="nav-item menu-close">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt text-danger"></i>
              <p class="text-white">
                Activites
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview tombol">
            <li class="nav-item">
                <a href="/activity" class="nav-link ">
                  <i class="far fa-circle nav-icon text-dark"></i>
                  <p class="text-white">Activities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/activity/create" class="nav-link ">
                  <i class="far fa-circle nav-icon text-dark"></i>
                  <p class="text-white ">Upload</p>
                </a>
              </li>
            </ul>
		</li>
		 <li class="nav-item tombol" >
                <a href="/message" class="nav-link">
                  <i class="far fa-circle nav-icon text-success "></i>
                  <p class="text-white">Message</p>
                </a>
              </li>
			       
          <li class="nav-item bg-dark ">
                <a href="{{route('logout')}}" class="nav-link" > 
                  <p class="text-white">Logout</p>
                </a>
          </li>
		@endif
         
         

             
       
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>