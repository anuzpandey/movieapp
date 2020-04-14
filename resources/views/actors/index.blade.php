@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 py-16">
        <!-- Popular Movies -->
        <div class="popular-actors">
            <h2 class="uppercase text-orange-500 tracking-wider text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($popularActors as $popularActor)
                    <div class="actor mt-8">
                        <a href="{{ route('actors.show', $popularActor['id']) }}">
                            <img src="{{ $popularActor['profile_path'] }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('actors.show', $popularActor['id']) }}" class="text-lg hover:text-gray-300">{{ $popularActor['name'] }}</a>
                            <div class="text-sm truncate text-gray-400" title="{{ $popularActor['known_for'] }}">{{ $popularActor['known_for'] }}</div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div> <!-- End - Popular Actors -->

        <div class="page-load-status my-8">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
            </div>
            <p class="infinite-scroll-last">End of content</p>
            <p class="infinite-scroll-error">Errors</p>
        </div>

{{--        <div class="flex justify-between mt-16">--}}
{{--            @if($previous)--}}
{{--                <a href="/actors/page/{{ $previous }}">Previous</a>--}}
{{--            @else--}}
{{--                <div></div>--}}
{{--            @endif--}}

{{--            @if($next)--}}
{{--                <a href="/actors/page/{{ $next }}">Next</a>--}}
{{--            @else--}}
{{--                <div></div>--}}
{{--            @endif--}}
{{--        </div>--}}

    </div>

@endsection

@section('scripts')
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.grid');
    var infScroll = new InfiniteScroll( elem, {
        // options
        path: '/actors/page/@{{#}}',
        append: '.actor',
        status: '.page-load-status'
        // history: false,

    });
</script>

@endsection
