@extends('layouts.main')

@section('title')
    create post
@endsection

@section('content')

<form action="{{ route('posts.store') }}" method="post" class="row my-5">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>

    <div class="mb-3">
        <label for="post-creator" class="form-label">Post Creator</label>
        <select class="form-select" name="post-creator" id="post-creator" aria-label="Default select example">
            <option selected value="Ahmed">Ahmed</option>
            <option value="Mohamed">Mohamed</option>
            <option value="Ali">Ali</option>
        </select>
    </div>
    <div class="my-3" >
            <a href="{{route('posts.store')}}" class="btn btn-success" style="width:5em !important">
                Create
            </a>
    </div>

</form>

@endsection
