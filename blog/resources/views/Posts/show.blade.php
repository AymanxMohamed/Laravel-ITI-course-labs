@extends('layouts.app')


@section('title')
    show post
@endsection

@section('content')

    <div class="row my-5">
        <div class="card">
            <div class="card-header">
                Post Info
            </div>
            <div class="card-body">
                <div class="card-title">
                    <p> <strong>Title :-</strong> {{ $post->title }} </p>
                </div>
                <h5>
                    Description :-
                </h5>
                <p class="card-text"> {{ $post->description }} </p>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="card">
            <div class="card-header">
                Post Creator info
            </div>
            <div class="card-body">
                <div class="card-text">
                    <p> <strong>Name :-</strong> {{ $post->user->name }} </p>
                </div>
                <div class="card-text">
                    <p> <strong>Email :-</strong> {{ $post->user->email }} </p>
                </div>
                <div class="card-text">
                    <p> <strong>Created At :-</strong> {{ $date }} </p>
                </div>

            </div>
        </div>
    </div>

@endsection
