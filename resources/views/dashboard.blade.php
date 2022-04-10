@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg text-center">
            <h1 class="text-3xl">Post App</h1><br><br>
            <h2 class="text-2xl">Welcome to your Dashboard of post app, {{ auth()->user()->name }}</h2><br><br>
            <p class="text- ">
            This is a twitter like application where user can share their thoughts and post on the website.
            You can see all the posts on the <a href="{{ route('posts') }}">posts page</a>.
            Goto our <a href="{{ route('posts') }}">posts page</a> to see all the posts of other users.
            </p>
        </div>
    </div>
@endsection