<!--   Core JS Files   -->
<script src="{{asset('now-ui/js/core/jquery.min.js')}}"></script>
<script src="{{asset('now-ui/js/core/popper.min.js')}}"></script>
<script src="{{asset('now-ui/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('now-ui/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

{{-- <script src="{{ url('adminlte/js/app.min.js') }}"></script> --}}

<!--  Google Maps Plugin    -->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
<!-- Chart JS -->
<script src="{{asset('now-ui/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('now-ui/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('now-ui/js/now-ui-dashboard.min.js?v=1.3.0')}}"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
{{-- <script src="{{asset('now-ui/demo/demo.js')}}"></script> --}}

{{-- Vue --}}
<script src="{{ mix('/client/js/manifest.js') }}" type="text/javascript" charset="utf-8)}}"></script>
<script src="{{ mix('/client/js/vendor.js') }}" type="text/javascript" charset="utf-8)}}"></script>
<script src="{{ mix('/client/js/app.js') }}" type="text/javascript" charset="utf-8)}}"></script>

@yield('javascript')