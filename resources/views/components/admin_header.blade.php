<!-- Navbar -->
<!-- Include SweetAlert2 CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style>

    /* CSS for hiding the options by default and showing them on hover */
/* .assistance-options {
    display: none;
    position: absolute;
    z-index: 1;
}

.assistance:hover .assistance-options {
    display: block;
} */

/* Style for the assistance trigger */
/* .assistance-trigger {
    cursor: pointer;

} */

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
      <div class="toggle-mobile-button d-block d-sm-none">
    <button class="navbar-toggler p-1 m-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
        @if (check_persmission('Assistance'))
        <li class="nav-item">
            <a href="{{ route('faq') }}" class="nav-link">Assistance</a>
        </li>
        @endif

        {{-- @if (check_persmission('')) --}}
        {{-- <li class="nav-item">
            <a href="#" class="nav-link">Rechercher un Co-convoyage</a>
        </li> --}}
        {{-- @endif --}}
        <!-- @if (check_persmission('Tableau de bord'))
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">Tableau de bord</a>
        </li>
        @endif -->
        @if (check_persmission('Rechercher un Carmoov'))
        <li class="nav-item">
            <a href="{{ route('missions') }}" class="nav-link">Rechercher un Carmoov</a>
        </li>
        @endif
        @if (check_persmission('Publier un Carmoov'))
            <li class="nav-item">
                <a href="/#move_car" class="nav-link">Publier un Carmoov</a>
            </li>
        @endif
        @if (check_persmission('Espace Co-convoyeur'))
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">Espace Co-convoyeur</a>
            </li>
        @endif
        @if (check_persmission('Espace Client'))
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">Espace Client</a>
            </li>
        @endif
        @if (check_persmission('Espace Convoyeur'))
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">Espace Convoyeur</a>
            </li>
        @endif
        @if (check_persmission('Espace Transporteur'))
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">Espace Transporteur</a>
            </li>
        @endif
    </ul>
</div>



    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      {{-- <li class="nav-item">
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
      </li> --}}
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
    <a href="{{route('dashboard')}}" class="brand-link">
      <img class="img-fluid" width="100%" height="100px" src="{{ asset('images/wallet/cocarmoov-fond-sombre.png') }}" alt="Wallet" class="brand-image img-circle elevation-3" style="opacity: .8">
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

        <ul class="nav nav-pills nav-sidebar flex-column pb-3" data-widget="treeview" role="menu" data-accordion="false">
        @if (check_persmission('Tableau de bord'))
        <li class="nav-item {{ Request::is('main-dashboard') ? 'menu-open menu-is-opening' : '' }}">
    <a href="{{ route('dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Tableau de bord
        </p>
    </a>
    @endif
   
    {{-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">Chiffre d'affaires total</p>
            </a>
        </li>
    </ul>
    <!-- private individual driver -->
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">Co-convoyages en cours</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">Demandes envoyées</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">    Propositions envoyées
</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">    Rechercher un véhicule
</p>
            </a>
        </li>
    </ul> --}}
    {{-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">    Créer une alerte
</p>
            </a>
        </li>
    </ul> --}}
    <!-- @if (check_persmission('Paiements en cours'))
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">    Paiements en cours
</p>
            </a>
        </li>
    </ul>
    @endif -->
    <!-- @if (check_persmission('Paiements en cours'))
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">    Paiements de l'année
</p>
            </a>
        </li>
    </ul>
    @endif
    @if (check_persmission('Économies de lannée'))
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill-wave nav-icon text-light"></i>
                <p class="text-light">    Économies de l'année
</p>
            </a>
        </li>
    </ul>
    @endif -->


    {{-- <ul class="nav nav-treeview">
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
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Taux de réponse</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Incidents signalés</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Économies réalisées</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Notes et commentaires</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Nombre d'offres annuelles</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Carmoovs notés 5/5</p>
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

    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-car-side nav-icon text-light"></i>
                <p class="text-light text-hover">Co-convoyages en cours</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-car-side nav-icon text-light"></i>
                <p class="text-light text-hover">Convoyages en cours</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-truck-moving nav-icon text-light"></i>
                <p class="text-light text-hover">Transports en cours</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-percent nav-icon text-light"></i>
                <p class="text-light text-hover">Taux de conversion</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-money-bill nav-icon text-light"></i>
                <p class="text-light text-hover">Transactions</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-file-contract nav-icon text-light"></i>
                <p class="text-light text-hover">Aperçu des commandes</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-bullseye nav-icon text-light"></i>
                <p class="text-light text-hover">Performances</p>
            </a>
        </li>
    </ul> --}}
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
            </a>
        </li>
    </ul> -->
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
            </a>
        </li>
    </ul> -->
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
            </a>
        </li>
    </ul> -->
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
            </a>
        </li>
    </ul> -->
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
            </a>
        </li>
    </ul> -->
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
            </a>
        </li>
    </ul> -->
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
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
    </ul> -->
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
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
    </ul> -->
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
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
    </ul> -->
    <!-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
            </a>
        </li>
    </ul> -->
    {{-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="fas fa-road nav-icon text-light"></i>
                <p class="text-light text-hover">Kilomètres parcourus</p>
            </a>
        </li>
    </ul> --}}
</li>

<!-- Private car owner permissions-->
@if (check_persmission('Commandes'))
<li class="nav-item {{ Request::is('carmoovs') ? 'menu-open menu-is-opening' : '' }}">
    <a href="/carmoovs" class="nav-link">
    <i class="nav-icon fas fa-cart-plus"></i>
        <p>
        Commandes
        </p>
    </a>
</li>
@endif
{{-- <li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Publier un Carmoov
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('show_profile') ? 'active' : '' }} text-hover rounded">
            <a href="{{route('profile.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Calculer un devis</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Publier un Carmoov</p>
            </a>
        </li>
    </ul>
</li> --}}
{{-- <li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Commandes
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Modifier le Carmoov</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Documents de mission</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Détails</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Confirmer la livraison</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Télécharger les documents</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Laisser un avis</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Reçus des dépenses</p>
            </a>
        </li>
    </ul> --}}
    @if (check_persmission('Voir mes Carmoovs'))
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Voir mes Carmoovs</p>
            </a>
        </li>
    </ul>
    @endif
    @if (check_persmission('Carmoovs en cours'))
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Carmoovs en ligne</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Carmoovs en cours</p>
            </a>
        </li>
    </ul>
    @endif
    {{-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Carmoovs archivés</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Annuler le Carmoov</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Remettre en ligne</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Signaler un problème</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Carmooveur absent</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Livraison tardive</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Pas de remise carburant</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Excès de kilométrage</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Service annexe absent</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Dommage extérieur</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Dommage intérieur</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Une amende</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Un autre problème</p>
            </a>
        </li>
    </ul>
</li> --}}
@if (check_persmission('Propositions'))
<li class="nav-item {{ Request::is('/perposals') ? 'menu-open menu-is-opening' : '' }}">
    <a href="{{route('Propositions')}}" class="nav-link">
        <i class="nav-icon fas fa-envelope"></i>
        <p>
            Propositions
        </p>
    </a>


{{-- <li class="nav-item {{ Request::is('/perposals') ? 'menu-open menu-is-opening' : '' }}">
    <a href="/perposals" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Propositions
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Propositions reçues</p>
            </a>
        </li>
    </ul>
    @if (check_persmission('Propositions non lues'))
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Propositions non lues</p>
            </a>
        </li>
    </ul>
    @endif
    @if (check_persmission('Propositions en attente'))
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Propositions en attente</p>
            </a>
        </li>
    </ul>
    @endif --}}
    {{-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Propositions traitées</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Accepter la réservation</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Rejeter la réservation</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Accepter le prix</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Rejeter le prix</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Accepter les dates</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Rejeter les dates</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Accepter la durée</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Rejeter la durée</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Accepter le kilométrage</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Rejeter le kilométrage</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Profil du Carmooveur</p>
            </a>
        </li>
    </ul> --}}
</li>
@endif

@if (check_persmission('Paiements'))
<li class="nav-item {{ Request::is('invoices') ? 'menu-open menu-is-opening' : '' }}">
    <a href="{{ route('invoice') }}" class="nav-link">
            <i class='nav-icon fas fa-file-invoice'></i>
            <p>
                Paiements
            </p>
        </a>
        {{-- <li class="nav-item {{ Request::is('carmoovs') ? 'menu-open menu-is-opening' : '' }}">
            <a href="/carmoovs" class="nav-link">
                <i class="nav-icon fas fa-car"></i>
                <p>
                    Carmoovs
                </p>
            </a>
        </li> --}}
    {{-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Historique des paiements</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Paiements en cours</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Détails</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Télécharger la facture</p>
            </a>
        </li>
    </ul> --}}
</li>
@endif
{{-- @if (check_persmission('Assistance'))
<li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Assistance
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Voir la FAQ</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Contacter CoCarmoov</p>
            </a>
        </li>
    </ul>
</li>
@endif --}}
<!-- private individual driver -->
{{-- <li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Rechercher un Carmoov
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Offres de Co-convoyage</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Rechercher un Carmoov</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Co-convoyages sur carte</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Détails</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Profil du Client</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Filtrer</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Demander à réserver</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Proposer un kilométrage</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Proposer des dates</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Proposer une durée</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Réserver</p>
            </a>
        </li>
    </ul>
</li> --}}
@if (check_persmission('Réservations'))
<li class="nav-item {{ Request::is('/bookings') ? 'menu-open menu-is-opening' : '' }}">
    <a href="/bookings" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Réservations
            {{-- <i class="right fas fa-angle-left"></i> --}}
        </p>
    </a>
    </li>
@endif
    {{-- <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Détails</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Télécharger le contrat</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Photos d'enlèvement</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Confirmer l'enlèvement</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Confirmer la livraison</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Photos de livraison</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Contrat signé</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Déclarer les frais</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Nombre de covoiturés</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Gains du covoiturage</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Nombre de colis-voiturage</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Gains du colis-voiturage</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Clôturer</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Laisser un avis</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Voir mes Co-convoyages</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Co-convoyages en cours</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Historique des Co-convoyages</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Signaler un problème</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Contact injoignable</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Adresse incorrecte</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Véhicule absent</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Description erronée</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Hors normes routières</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Véhicule en réserve</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Une panne</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Un autre problème</p>
            </a>
        </li>
    </ul> --}}


{{-- @if (check_persmission('Propositions'))
<li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Propositions
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Demandes envoyées</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Propositions envoyées</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Réserver</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Annuler la demande</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Réserver</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Proposer un kilométrage</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Proposer des dates</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Proposer une durée</p>
            </a>
        </li>
    </ul>
</li>
@endif --}}
{{-- <li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-envelope"></i>
        <p>
            Demandes
        </p>
    </a>
</li> --}}

{{-- <li class="nav-item {{ Request::is('#') ? 'menu-open menu-is-opening' : '' }}">
    <a href="/cards" class="nav-link">
        <i class="nav-icon fas fa-credit-card"></i>
        <p>
            Paiements
        </p>
    </a>
</li>
@endif --}}
{{-- <li class="nav-item {{ Request::is('#') ? 'active' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-car"></i>
        <p>
            Co-convoyages
        </p>
    </a>
</li> --}}
@if (check_persmission('Alertes'))
<li class="nav-item {{ Request::is('alerts') ? 'menu-open menu-is-opening' : '' }}">
    <a href="{{ route('alerts') }}" class="nav-link">
        <i class="nav-icon fas fa-bell"></i>
        <p>
            Alertes
        </p>
    </a>
</li>
@endif
{{-- <li class="nav-item {{ Request::is('#') ? 'active' : '' }}">
    <a href="{{ route('alerts') }}" class="nav-link">
        <i class="nav-icon fas fa-car-side"></i>
        <p>
            Proposer un Carmoov
        </p>
    </a>
</li>

<li class="nav-item {{ Request::is('#') ? 'active' : '' }}">
    <a href="{{ route('alerts') }}" class="nav-link">
        <i class="nav-icon fas fa-taxi"></i>
        <p>
            Rechercher un Carmoov
        </p>
    </a>
</li> --}}
@if (check_persmission('Certifications'))
<li class="nav-item {{ Request::is('#') ? 'active' : '' }}">
    <a href="{{ route('alerts') }}" class="nav-link">
        <i class="nav-icon fas fa-certificate"></i>
        <p>
            Certifications
        </p>
    </a>
</li>
@endif
<li class="nav-item {{ Request::is('show_profile') ? 'menu-open menu-is-opening' : '' }}">
@if (check_persmission('Profil'))
<a href="{{ route('profile.index') }}" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Profil
        </p>
    </a>
    @endif
</li>
{{-- <li class="nav-item">
    <a href="{{ route('alerts') }}" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-car"></i>
        <p>
            Convoyages
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('alerts') }}" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-shipping-fast"></i>
        <p>
            Transports
        </p>
    </a>
</li> --}}
<!-- <li class="nav-item">
    <a href="{{ route('alerts') }}" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-shipping-fast"></i>
        <p>
            Transports
        </p>
    </a>
</li> -->

<!-- <li class="nav-item {{ Request::is('roles-and-permissions','permissions','roles') ? 'menu-open menu-is-opening' : '' }}">
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
        <li class="nav-item {{ Request::is('permissions') ? 'active' : '' }} text-hover rounded">
            <a href="{{ route('permissions') }}" class="nav-link">
                <i class="far fa-circle nav-icon text-light"></i>
                <p class="text-light">Autorisations</p>
            </a>
        </li>
    </ul>
</li> -->

{{-- <li class="nav-item {{ Request::is('invoices') ? 'menu-open menu-is-opening' : '' }}">
<a href="{{ route('invoice') }}" class="nav-link">
        <i class='fas fa-file-invoice text-light'></i>
        <p class='text-light'> Invoicing</p>
    </a>
</li> --}}

          <!-- <li class="nav-item{{ Request::is('fullcalendar') ? ' active' : '' }}">
    <a href="#" class="nav-link">
        <i class='fas fa-calendar text-dark'></i>
        <p class='text-dark'>Calendar</p>
    </a>
</li> -->


          <!-- <li class="nav-item menu-open">
            <ul class="nav nav-treeview rounded">
              <li class="nav-item">
                <a href="{{route('certification')}}" class="nav-link">
                  <i class='fas fa-bell text-light'></i>
                  <p class='text-light'>Training space</p>
                </a>
              </li>
            </ul>
          </li> -->


{{-- <li>
<ul class="nav nav-treeview">
    <li class="nav-item {{ Request::is('#') ? 'active' : '' }} text-hover rounded">
        <a href="#" class="nav-link">
            <i class="fas fa-shopping-cart nav-icon text-light"></i>
            <p class="text-light text-hover">Commandes</p>
        </a>
    </li>
</ul>
</li>
@endif --}}
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
            title: 'Es-tu sûr?',
            text: 'Vous serez déconnecté !',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, déconnectez-moi !'
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
