<!-- Navbar -->
<!-- Include SweetAlert2 CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style>
  .nav-item.active a {
    background-color: #fdcd02; /* Set your desired background color */
    color: #000; /* Set your desired text color */
  }
  .nav-item.active a:hover{
    background-color: #fdcd02; /* Set your desired background color */
    color: #000; /* Set your desired text color */
  }
  .text-hover:hover{
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
        <a href="{{ route('insurance') }}" class="nav-link">Assistance</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Rechercher un Co-convoyage</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Tableau de bord</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Rechercher un Carmoov</a>
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
      <form id="logout-form" method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="button" class="nav-link" role="button" style="border: none; background-color: transparent;" onclick="confirmLogout()">
        <i class="fa fa-power-off"></i>
    </button>
</form>

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


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{ Request::is('main-dashboard') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Tableau de bord
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('main-dashboard') ? 'active' : '' }} text-hover rounded">
            <a href="{{route('dashboard')}}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Tableau de bord</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">Chiffre d'affaires total</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-credit-card nav-icon text-light"></i>
                <p class="text-light">Dépenses totales</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-dollar-sign nav-icon text-light"></i>
                <p class="text-light">Bénéfice total</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-file-alt nav-icon text-light"></i>
                <p class="text-light">Rapport de bénéfices</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fas fa-balance-scale nav-icon text-light"></i>
                <p class="text-light">Rapports de solde</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-shopping-cart nav-icon text-light"></i>
                <p class="text-light text-hover">Commandes</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-chart-bar nav-icon text-light"></i>
                <p class="text-light text-hover">Statistiques des commandes</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-users nav-icon text-light"></i>
                <p class="text-light text-hover">Nombre d'utilisateurs</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-car"></i>
        <p>
        Carmoovs
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light text-hover">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('show_profile') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Profil
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('show_profile') ? 'active' : '' }} text-hover rounded">
            <a href="{{route('profile.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-envelope"></i>
        <p>
        Demandes
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-dark"></i>
                <p class="text-dark">Orders 1</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-credit-card"></i>
        <p>
        Paiements
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-car"></i>
        <p>
        Co-convoyages
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('alerts') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-bell"></i>
        <p>
        Alertes
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('alerts') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('alerts') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('alerts') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-car-side"></i>
        <p>
        Proposer un Carmoov
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('alerts') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('alerts') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('alerts') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-taxi"></i>
        <p>
        Rechercher un Carmoov
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('alerts') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('alerts') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('alerts') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-certificate"></i>
        <p>
        Certifications
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('alerts') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('alerts') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('alerts') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-car"></i>
        <p>
        Convoyages
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('alerts') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('alerts') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('alerts') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shipping-fast"></i>
        <p>
        Transports
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('alerts') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('alerts') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('bookings') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
        Bookings
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('bookings') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('bookings') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Orders 1</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('roles-and-permissions','/get-permissions/{role_id}','roles') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-key"></i>
        <p>
        Gestion
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('roles-and-permissions') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('roles.and.permissions') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Rôles et autorisations</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('roles') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('roles') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Rôles</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('/permissions') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('permissions') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Autorisations</p>
            </a>
        </li>
    </ul>
</li>
          <li class="nav-item{{ Request::is('invoices') ? ' active' : '' }}">
    <a href="{{ route('invoice') }}" class="nav-link">
        <i class='fas fa-file-invoice text-dark'></i>
        <p class='text-dark'>Invoicing</p>
    </a>
</li>
          <li class="nav-item{{ Request::is('fullcalendar') ? ' active' : '' }}">
    <a href="#" class="nav-link">
        <i class='fas fa-calendar text-dark'></i>
        <p class='text-dark'>Calendar</p>
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

          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <p>Manage <i class="fas fa-angle-down"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('roles.and.permissions') }}" class="nav-link">
                        <p></p>
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
        </li> -->

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

    $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
