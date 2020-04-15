@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">
        <!-- Popular Movies -->
        <div class="popular-tvs">
            <h2 class="uppercase text-orange-500 tracking-wider text-lg font-semibold">Popular Tv Shows</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($popularTv as $tvShow)
                    <x-tv-card :tvShow="$tvShow" :genres="$genres"></x-tv-card>
                @endforeach

            </div>
        </div>

        <!-- Now Playing -->
        <div class="top-rated-shows py-24">
            <h2 class="uppercase text-orange-500 tracking-wider text-lg font-semibold">Top Rated Tv Show</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($topRatedTv as $tvShow)
                    <x-tv-card :tvShow="$tvShow" :genres="$genres"></x-tv-card>
                @endforeach

            </div>
        </div>
    </div>

@endsection
