@extends('layouts.app')
@section('content')
  <h1>Mensaje id: {{ $message->id }}</h1>
  <img class="img-thumbnail" src="{{ $message->image }}">
  <small class="text-muted">{{ $message->created_at }}</small>
@stop