@extends('layouts.auth')

@section('content')
<div class="col-md-4 ml-auto mr-auto">
    <div class="card card-login card-plain">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>@lang('quickadmin.qa_whoops')</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="form" method="POST" action="{{ url('login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="card-header text-center">
                {{-- <div class="logo-container"> --}}
                {{-- <img src="../assets/img/now-logo.png" alt=""> --}}
                <h3> {{ ucfirst(config('app.name')) }} @lang('quickadmin.qa_login')</h3>
                {{-- </div> --}}
            </div>
            <div class="card-body">
                <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="now-ui-icons users_circle-08"></i>
                        </span>
                    </div>
                    <input name="email" type="email" class="form-control" placeholder="Email...">
                </div>
                <div class="input-group no-border input-lg mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="now-ui-icons text_caps-small"></i>
                        </span>
                    </div>
                    <input type="password" name="password" placeholder="Password..." class="form-control" />
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">Entrer</button>
                <div class="pull-left">
                    <h6>
                        <a class="link" href="{{ route('auth.password.reset') }}">@lang('quickadmin.qa_forgot_password')</a>
                    </h6>
                </div>
                <div class="pull-right">
                    <h6>
                        <input type="checkbox" name="remember" class="align-middle"> <span class="link">@lang('quickadmin.qa_remember_me')</span>
                    </h6>
                </div>
        </form>
    </div>
</div>

{{-- this is just for leting others test remove it in prod or when u sell it --}}
<script>
    var passEl=document.querySelector('[type="password"]');
    var emailEl=document.querySelector('[type="email"]');
    passEl.value="password";
    emailEl.value="admin@admin.com";
</script>

{{-- <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">{{ ucfirst(config('app.name')) }} @lang('quickadmin.qa_login')</div>
<div class="panel-body">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>@lang('quickadmin.qa_whoops')</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="form-horizontal" role="form" method="POST" action="{{ url('login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label class="col-md-4 control-label">@lang('quickadmin.qa_email')</label>

            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <a href="{{ route('auth.password.reset') }}">@lang('quickadmin.qa_forgot_password')</a>
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <label>
                    <input type="checkbox" name="remember"> @lang('quickadmin.qa_remember_me')
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                    @lang('quickadmin.qa_login')
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div> --}}
@endsection