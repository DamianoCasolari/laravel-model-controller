@extends('layout.app')
@section('page-title', 'Movies')
@section('content')
    <div class="align-items-md-stretch p-4">
        <div class="col-md-12">
            <div class="h-100 text-white bg-secondary border rounded-3 p-3">
                <h2>Choose your favorite movie</h2>
                <div class="w-100 row row-cols-2 row-cols-md-4 g-3 justify-content-center">

                    @forelse ($movies as $movie)
                        <div class="col text-dark">
                            <div class="card my_card">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title card-title">{{ $movie->title }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted ">{{ $movie->nationality }}</h6>
                                    <p class="card-text">{{ $movie->date }}</p>
                                    <p class="card-text">{{ $movie->vote }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            Sorry there's no Movies here
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    @endsection
