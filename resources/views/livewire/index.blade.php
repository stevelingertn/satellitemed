@extends ('layouts.app-nofooter')

@section('content')

    <div class="py-8 mx-auto text-center items-center max-w-7xl">
        <table class="table-fixed w-full">
            <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Thumbnail</th>
                <th class="px-4 py-2">Author</th>
                <th class="px-4 py-2">Publish Date</th>
                <th class="px-4 py-2">View Article</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>

                    <td class="border px-4 py-2">{{ $article->title }}</td>
                    <td class="border px-4 py-2"><img src="{{ $article->thumbnail }}" /></td>
                    <td class="border px-4 py-2">{{ $article->author }}</td>
                    <td class="border px-4 py-2">{{ $article->created_at->format("m-d-Y") }}</td>
                    <td class="border px-4 py-2">
                        <a href="/articles/{{ $article->slug }}"><button  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">View Article</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $articles->links() }}
    </div>




    {{--                <p>--}}
    {{--                    @foreach ($article->tags as $tag)--}}
    {{--                        <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{$tag->name}}</a>--}}
    {{--                    @endforeach--}}
    {{--                </p>--}}


@endsection
