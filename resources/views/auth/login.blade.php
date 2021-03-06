@extends('layouts.app')

@section('content')
    <div class="row-fluid">
        <div class="span4"></div>
        <div class="span3">
            @if ($errors->any())
                <div class="alert alert-error">
                    Вход в систему с указанными данными невозможен
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="control-group">
                    <input id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Логин" data-cip-id="username"
                           autocomplete="off">
                </div>
                <div class="control-group">
                    <input id="password" type="password" name="password" placeholder="Пароль"
                           data-cip-id="password">
                </div>
                <div class="control-group">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Запомнить меня
                    </label>
                    <button type="submit" class="btn btn-primary">Вход</button>
                </div>
            </form>
        </div>
    </div>
@endsection
