
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
            @if ($post->category)
            <span class="badge badge-primary">{{$post->category->name}}</span>
            @endif
        </div>
        <div class="card-body">
            <div>
                {{$post->content}}
            </div>
        </div>
        @if(count($post->tags) > 0)
        <div class="mt-3">
            <h5>Tags</h5>
            <ul>
                @foreach ($post->tags as $tag)
                <li>{{$tag->name}}</li> 
                @endforeach
            </ul>
        </div>
        @endif
        <div class="mb-3 mt-3">
            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Show all Posts</a>
        </div>
    </div>
</div>
@endsection

