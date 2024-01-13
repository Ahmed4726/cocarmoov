<!-- Navbar -->
<!-- Include SweetAlert2 CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style>
  .nav-item.active a {
    background-color: #fdcd02; /* Set your desired background color */
    color: #000; /* Set your desired text color */
  }
</style>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->
            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->
            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->
            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->
      <form id="logout-form" method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="button" class="nav-link" role="button" style="border: none; background-color: transparent;" onclick="confirmLogout()">
        <i class="fa fa-power-off"></i>
    </button>
</form>

      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul> -->
  </nav>
  <!-- /.navbar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style='background-color:#333132'>
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img class="img-fluid" width="100%" height="100px" src="{{ asset('images/wallet/footer-2.png') }}" alt="Wallet" class="brand-image img-circle elevation-3" style="opacity: .8">
      <!-- <span class="brand-text font-weight-light">CoCarmoov</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <ul class="nav nav-treeview rounded" style='background-color:#fdcd02;'>
              <li class="nav-item">
                <a href="{{route('account')}}" class="nav-link">
                <i class='fas fa-user text-dark'></i>
                  <p  class='text-dark'>My account</p>
                </a>
              </li>
            </ul>
          </li>
               <li class="nav-item menu-open">
            <ul class="nav nav-treeview rounded" style='background-color:#fdcd02;'>
              <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">
                <i class='fas fa-tachometer-alt text-dark'></i>
                  <p  class='text-dark'>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          @if(check_persmission('test','view'))
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview rounded" style='background-color:#fdcd02;'>
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                <i class='fas fa-shopping-cart text-dark'></i>
                  <p  class='text-dark'>Orders</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview rounded" style='background-color:#fdcd02;'>
              <li class="nav-item">
                <a href="{{route('invoice')}}" class="nav-link">
                <i class='fas fa-file-invoice text-dark'></i>
                  <p  class='text-dark'>Invoicing</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview rounded" style='background-color:#fdcd02;'>
              <li class="nav-item">
                <a href="{{route('bookings')}}" class="nav-link">
                  <i class='fas fa-car text-dark'></i>
                  <p class='text-dark'>Bookings</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item{{ Request::is('calendar') ? ' active' : '' }}">
    <a href="{{ route('calendar') }}" class="nav-link">
        <i class='fas fa-calendar text-dark'></i>
        <p class='text-dark'>Calendar</p>
    </a>
</li>

<li class="nav-item{{ Request::is('alerts') ? ' active' : '' }}">
    <a href="{{ route('alerts') }}" class="nav-link">
        <i class='fas fa-bell text-dark'></i>
        <p class='text-dark'>Alerts</p>
    </a>
</li>

          <li class="nav-item menu-open">
            <ul class="nav nav-treeview rounded" style='background-color:#fdcd02;'>
              <li class="nav-item">
                <a href="{{route('certification')}}" class="nav-link">
                  <i class='fas fa-bell text-dark'></i>
                  <p class='text-dark'>Training space</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview rounded" style='background-color:#fdcd02;'>
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class='fas fa-user text-dark'></i>
                  <p class='text-dark'>My profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <p>Manage <i class="fas fa-angle-down"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('roles.and.permissions') }}" class="nav-link">
                        <p>Roles & Permissions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('roles') }}" class="nav-link">
                        <p>Roles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('permissions') }}" class="nav-link">
                        <p>Permissions</p>
                    </a>
                </li>
            </ul>
        </li>

          <!-- <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <p>Profile</p>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>
    function confirmLogout() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will be logged out!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, log me out!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form
                document.getElementById('logout-form').submit();
            }
        });
    }
</script>
