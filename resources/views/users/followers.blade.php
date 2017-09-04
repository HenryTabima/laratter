@extends('layouts.app')
@section('content')
  <ul>
  @foreach($user->followers as $follower)
    <li>{{ $follower->username }}
  @endforeach
  </ul>
@stop