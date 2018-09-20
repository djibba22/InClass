@extends('layout')

@section('title')
Home Page
@endsection

@section('content')
  <h1>This is my Home Page</h1>
  <div class="container text-center">
      <a icon class="btn btn-success" href="/users/create"><i class='material-icons'>fingerprint</i>
       Signup</a>
       <div class="row">
       <a icon class="btn btn-info" href="/users">All Users</a>
      </div>
  </div>
@stop


