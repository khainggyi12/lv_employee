@extends('layout.app-master')

@section('content')
  <div class="bg-light p-5 rounded">
    @auth
        <h1>Dashbord</h1>
        <p>Only Authentication users can assess this action</p>

        @can('isAdmin')
        <a class="btn btn-success btn-lg">Admin Access</a>
        @elsecan('isManager')
        <a class="btn btn-success btn-lg">Manager Access</a>
        @else
        <a class="btn btn-success btn-lg">Branch Manager Access</a>
        @endcan

    @endauth

    @guest
    <h1 class="text-center">Dashbord</h1>
    <p>You are in home page</p>
@endguest
  </div>
@endsection