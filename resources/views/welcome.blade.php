@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Larater</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
        </ul>
    </nav>
</div>
<div class="row">
    <form action="/messages/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group @if($errors->has('message')) has-danger @endif">
            <input type="text" name="message" class="form-control" placeholder="Que estás pensando?">
            @if ($errors->has('message'))
                @foreach($errors->get('message') as $error)
                    <div class="form-control-feedback">{{ $error }} </div>
                @endforeach
            @endif
            <input type="file" class="form-control-file" name="image">
        </div>
    </form>
</div>
<div class="row">
    @forelse($messages as $message)
        <div class="col-6">
            @include('messages.message')
        </div>
    @empty
        <p>
            No hay mensajes destacados
        </p>
    @endforelse
    <div class="mt-4 mx-auto">
        @if (count($messages))
            {{ $messages->links('pagination::bootstrap-4') }}
        @endif
    </div>
</div>
@stop