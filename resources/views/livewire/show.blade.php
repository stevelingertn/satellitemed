@extends ('layouts.app-nofooter')

@section('content')
<title>{{ $article->title }} | Satellite Med | Urgent Care and Family Practice</title>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto items-center max-w-5xl text-center font-bold text-5xl text-gray-700">
                {{$article->title}}
            </div>


            <div class="mx-auto max-w-5xl  text-gray-500 p-4">
                {!! $article->body !!}
            </div>

            <div class="mx-auto text-center font-light text-gray-400 italic">
                Published : {{ $article->created_at->format('m-d-Y')  }} | By: {{ $article->author }}
            </div>

        </div>
    </div>




{{--                <p>--}}
{{--                    @foreach ($article->tags as $tag)--}}
{{--                        <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{$tag->name}}</a>--}}
{{--                    @endforeach--}}
{{--                </p>--}}


@endsection
