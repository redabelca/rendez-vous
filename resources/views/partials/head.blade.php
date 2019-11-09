<meta charset="utf-8">
<title>
    {{ trans('quickadmin.quickadmin_title') }}
</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="dp-date" content="{{ config('app.date_format_moment') }}">
<meta name="dp-time" content="{{ config('app.time_format_moment') }}">
<meta name="dp-datetime" content="{{ config('app.datetime_format_moment') }}">
<meta name="app-locale" content="{{ App::getLocale() }}">

<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> --}}
<!-- CSS Files -->
<link href="{{asset('now-ui/css/bootstrap.min.css')}}" rel="stylesheet" />

{{-- <link rel="stylesheet" href="{{ url('adminlte/css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="{{ url('adminlte/css/custom.css') }}">
<link rel="stylesheet" href="{{ url('adminlte/css/skins/skin-blue.min.css') }}"> --}}

<link href="{{asset('now-ui/css/now-ui-dashboard.css?v=1.3.0')}}" rel="stylesheet" />
<link href="{{asset('now-ui/demo/demo.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ mix('/client/css/app.css') }}">