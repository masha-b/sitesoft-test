@extends('layouts.app')

@section('content')
    <div class="row-fluid">
        <div class="span2"></div>
        <div class="span8">
            @auth
            <form action="{{ route('message.store') }}" method="post" class="form-horizontal" style="margin-bottom: 50px;">
                {{ csrf_field() }}
                @if ($errors->any())
                    <div class="alert alert-error">
                        {{ $errors->first('text') }}
                    </div>
                @endif

                <div class="control-group">
                <textarea style="width: 100%; height: 50px;" id="text" name="text" placeholder="Ваше сообщение..."
                          data-cip-id="text">{{ old('text') }}</textarea>
                </div>
                <div class="control-group">
                    <button type="submit" class="btn btn-primary">Отправить сообщение</button>
                </div>
            </form>
            @endauth
            @forelse ($messages as $message)
                <div class="well">
                    <h5>{{ $message->user->username }}:</h5>
                    {{ $message->text }}
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
