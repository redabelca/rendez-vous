<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.head')
</head>

<body>
  <div class="vue-dashboard-app">

    @include('partials.sidebar')

    <div class="main-panel" id="main-panel">

      <!-- Navbar -->
      @include('partials.topbar')
      <!-- End Navbar -->
      
      <div :class="this.containerClasses">
        <event-hub></event-hub>
        <router-view></router-view>
      </div>

      {{-- <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer> --}}

    </div>
  </div>

  {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
  <button type="submit">Logout</button>
  {!! Form::close() !!}

  @include('partials.javascripts')
</body>

</html>