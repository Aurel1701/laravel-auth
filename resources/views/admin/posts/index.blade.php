@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
                    <a class="d-flex justify-content-end" href="">Add post</a>
                </div>

                <div class="card-body">
                    <ul class="list-post">
                        @foreach ($posts as $post )
                           
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection