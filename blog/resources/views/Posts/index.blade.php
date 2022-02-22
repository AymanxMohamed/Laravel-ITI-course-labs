@extends('layouts.app')

@section('title')
    Index
@endsection

@section('content')

    <div class=" row d-flex justify-content-center my-5" >
            <a href="{{route('posts.create')}}" class="btn btn-success" style="width:8em !important">
                Create Post
            </a>
    </div>

    <div class="row d-flex justify-content-center text-center" >
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col" colspan="3" >Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                            {{  
                                Carbon\Carbon::parse($post->created_at)->format('Y-m-d');
                            }}
                        </td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">
                                View
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">
                                Edit
                            </a>
                        </td>
                        <td>
                            <form id="myform" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="submit" class="btn btn-danger show_confirm" title='Delete' data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $posts->links() !!}
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('Are you sure you want to delete this?')) {
            e.preventDefault();
        }
    });
</script>
@endsection
{{-- class="btn btn-danger" --}}
{{-- <x-button type="primary"></x-button>
<x-button type="secondary"></x-button>
<x-button type="danger"></x-button> --}}
