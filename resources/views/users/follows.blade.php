@extends('layouts.app')
@section('content')
  <ul>
  @foreach($user->follows as $follow)
    <li>{{ $follow->username }}
  @endforeach
  </ul>
@stop