@extends('layouts.app')

@section('title', 'Movies')

@section('main-content')

<div class="container mt-5">
        @foreach($movies as $movie)

            <!-- card -->
            <div class="card mb-4" data-bs-toggle="modal" data-bs-target="#movieModal{{ $loop->index }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span class="fw-bold">Nationality:</span> {{ $movie['nationality'] }}</li>
                    <li class="list-group-item"><span class="fw-bold">Release Date:</span> {{ $movie['date'] }}</li>
                    <li class="list-group-item"><span class="fw-bold">Vote:</span> {{ $movie['vote'] }}</li>
                </ul>
            </div>
            @endforeach
            @endsection


