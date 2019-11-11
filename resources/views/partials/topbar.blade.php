<nav :class="topnavbarClasses">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <router-link to="{ name:'home' }" class="navbar-brand">
        @lang('quickadmin.quickadmin_title')
      </router-link>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons users_single-02"></i>
            <p>
              <span class="d-lg-none d-md-block">Parametres</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <router-link class="dropdown-item" :to="{ name: 'auth.change_password' }">
              <i class="now-ui-icons objects_key-25"></i>
              <span>@lang('quickadmin.qa_change_password')</span>
            </router-link>
            <a class="dropdown-item" href="#logout" onclick="$('#logout').submit();">
              <i class="now-ui-icons arrows-1_minimal-left"></i>
              <span>@lang('quickadmin.qa_logout')</span>
            </a>
          </div>
        </li>

      </ul>
    </div>
  </div>
</nav>


{{-- <header class="main-header">
  <!-- Logo -->
  <a href="{{ url('/admin/home') }}" class="logo" style="font-size: 16px;">
<!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini">
  @lang('quickadmin.quickadmin_title')</span>
<!-- logo for regular state and mobile devices -->
<span class="logo-lg">
  @lang('quickadmin.quickadmin_title')</span>
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





</nav>
</header> --}}