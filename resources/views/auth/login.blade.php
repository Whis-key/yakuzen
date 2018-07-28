@extends('layouts.app')

@section('content')

<div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper" style="width: 400px;
                                                float: none;
                                                margin: auto;
                                                display: block;
                                                padding-top: 100px">

                <!-- Content area -->
                <div class="content">

                    <!-- Simple login form -->
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object text-danger"><i class="icon-reading"></i></div>
                                <br>
                                <br>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="text-danger" role="alert">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>

                                @if ($errors->has('password'))
                                    <span class="text-danger" role="alert">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-block">Đăng nhập <i class="icon-circle-right2 position-right"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- /simple login form -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
@endsection
