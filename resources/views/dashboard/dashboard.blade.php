@extends('dashboard/template')
@section('main_section')
@include('dashboard/includes/alerts')
  <h1>Welcome to Dashboard </h1> <h1>{{ Auth::user()->name }}</h1>
@endsection
