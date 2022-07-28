@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit:  "{{$tag->name}}"</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.tags.update', $tag->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $tag->name)}}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection