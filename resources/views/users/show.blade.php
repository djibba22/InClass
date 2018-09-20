@extends('layout')

{{-- Render the details for one user --}}
@section('profile')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Welcome: {{$user->name}}</h2>
            </div>
            <div class="card-body">
                <h2>Here are your details</h2>
                <p>User ID: {{$user->id}}</p>
                <p>Name: {{$user->name}}</p>
                <p>Email: {{$user->email}}</p>
            </div> 
        </div> 
    </div>
@endsection