@extends('layouts.main')

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
                    <p> <strong>Title :-</strong> Special title treatmment</p>
                </div>
                <h5>
                    Description :-
                </h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
                    <p> <strong>Name :-</strong> Ayman</p>
                </div>
                <div class="card-text">
                    <p> <strong>Email :-</strong> Ayman@gmail.com</p>
                </div>
                <div class="card-text">
                    <p> <strong>Created At :-</strong> Thursday 25th of December 1975 02:15:16 PM</p>
                </div>

            </div>
        </div>
    </div>

@endsection
