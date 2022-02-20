@extends('layouts.main')

@section('title')
    create post
@endsection

@section('content')

<form action="{{ route('posts.store') }}" method="POST" class="row my-5">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5">
        </textarea>
    </div>

    <div class="mb-3">
        <label for="user_id" class="form-label">Post Creator</label>
        <select class="form-select" name="user_id" id="user_id" aria-label="Default select example">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">
                    {{ $user->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="my-3" >
        <button type="submit" class="btn btn-success" style="width:5em !important">
                Create
        </button>
    </div>
</form>
@endsection
