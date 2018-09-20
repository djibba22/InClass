@extends('layout')
<div class="container">
    <h2>All Users</h2>
    @foreach ($users as $user)
        <div class="card">
            <p>Username:{{$user->name}}</p>
            <p>Email:{{$user->email}}</p>
            {{-- go to a specific user --}}
            <a class="btn btn-success" href="/users/{{$user->id}}">{{$user->name}} Details</a>      
        </div>
        <br>
    @endforeach
</div>