@extends('layouts.admin')

@section('content')

<div class="">
    <div class="d-flex justify-content-between py-4">
        <h1>All Posts</h1>
        <div><a href="{{route('admin.posts.create')}}" class="btn btn-primary">Add Post</a></div>
    </div>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Excerpt</th>
                <th>Cover</th>
                <th>body</th>
                <th>author</th>
            </tr>
        </thead>

        <tbody>
            @forelse($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->excerpt}}</td>
                <td><img width="150" src="{{$post->cover}}" alt="Cover image {{$post->title}}"></td>
                <td>{{$post->body}}</td>
                <td>{{$post->author}}</td>
                <td>
                    <a class="btn btn-primary text-white btn-sm" href="#">View</a>
                    <a class="btn btn-secondary text-white btn-sm" href="#">Edit</a>
                </td>
            </tr>

            @empty
            <tr>
                <td scope="row">No Posts! Create your first post <a href="#">Create post</a></td>
            </tr>
            @endforelse
        </tbody>
    </table>



@endsection