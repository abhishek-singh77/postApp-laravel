@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg text-center">
            <h1 class="text-3xl">Post App</h1><br><br>
            <h2 class="text-2xl">Welcome to the home page of post app.</h2><br><br>
            {{-- need justified paragraph below --}}
            <p class="text- ">
            This is a twitter like application where user can share their thoughts and post on the website.
            You can see all the posts on the <a href="{{ route('posts') }}">posts page</a>.
            You can also see the posts of other users on the <a href="{{ route('dashboard') }}">dashboard page</a>.<br>
            
            Please Login to our website to share your thoughts with our community.<br><br>
            </p>
        </div>
        
    </div>
@endsection