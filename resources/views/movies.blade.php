@extends('layout.app')
@section('page-title', 'Movies')
@section('content')
    <div class="row align-items-md-stretch p-4">
        <div class="col-md-12">
            <div class="h-100 p-5 text-white bg-secondary border rounded-3">
                <h2>Choose your favorite movie</h2>
                <div class="row row-cols-2 row-cols-md-4">

                    @forelse ($collection as $item)
                        <div class="col">
                            <div class="card" style="width:18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movie->title }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted ">{{ $movie->nationaity }}</h6>
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
