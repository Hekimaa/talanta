

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admins')?>" class="brand-link">
      <img src="<?= base_url()?>/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Talanta</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           <img src="<?= base_url('uploads/users/'.session()->get('image')) ?>" class="img-circle elevation-2" alt="image"style="width:50px;height: 50px;" >
        </div>
        <div class="info">
          <a href="<?= base_url('admins')?>" class="d-block"><?= session()->get('full_name') ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?= base_url('admins')?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>


            <li class="nav-item">
            <a href="<?= base_url('/clients')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Clients
               
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?= base_url('/teammembers')?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Team
               
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="<?= base_url('/services')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Services
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/trainingss')?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>  
                Virtual Training
               
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?= base_url('/preschedules')?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Face to Face Training
               
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?= base_url('/Messages/ReadMessages')?>" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
               Messages
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('/users')?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
               
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>