@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{ $post->created_at->toFormattedDateString() }} by
                            <a href="#">{{ $post->user->name }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
