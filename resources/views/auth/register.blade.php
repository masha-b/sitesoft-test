@extends('layouts.app')

@section('content')
    <div class="row-fluid">
        <div class="span4"></div>
        <div class="span8">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="control-group">
                    <b>Регистрация</b>
                </div>
                <div class="control-group{{ $errors->has('username') ? ' error' : '' }}">
                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Логин" data-cip-id="username" autocomplete="off">
                    @if ($errors->has('username'))
                        <span class="help-inline">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="control-group{{ $errors->has('password') ? ' error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Пароль" data-cip-id="password" autocomplete="off">
                    @if ($errors->has('password'))
                        <span class="help-inline">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="control-group{{ $errors->has('confirmed') ? ' error' : '' }}">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль" data-cip-id="password-confirm" autocomplete="off">
                    @if ($errors->has('confirmed'))
                        <span class="help-inline">{{ $errors->first('confirmed') }}</span>
                    @endif
                </div>
                <div class="control-group">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
    </div>


{{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}
@endsection
