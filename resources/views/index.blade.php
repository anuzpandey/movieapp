@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">
        <!-- Popular Movies -->
        <div class="popular-movies">
            <h2 class="uppercase text-orange-500 tracking-wider text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"></x-movie-card>
                @endforeach

            </div>
        </div>

        <!-- Now Playing -->
        <div class="now-playing-movies py-24">
            <h2 class="uppercase text-orange-500 tracking-wider text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"></x-movie-card>
                @endforeach

            </div>
        </div>
    </div>

@endsection
