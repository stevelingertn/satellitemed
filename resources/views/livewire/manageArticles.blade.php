
@extends ('layouts.app-nofooter')

@section('content')



<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <p>Welcome  to the article management page.</p>
            @if (session()->has('message'))
                <div class="bg-green-300 border-t-4 border-green-500 rounded-b text-gray-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex  ">
                        <div>
                            <p class="text-sm ">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded my-3">Create New Article</button>
            @if($isOpen)
                @include('livewire.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 w-20">#</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Slug</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td class="border px-4 py-2">{{ $article->id }}</td>
                        <td class="border px-4 py-2">{{ $article->title }}</td>
                        <td class="border px-4 py-2">{{ $article->slug }}</td>
                        <td class="border px-4 py-2">{{ $article->author }}</td>
                        <td class="border px-4 py-2">
                            <a target="_blank" href="/articles/{{ $article->slug }}"><button  class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</button></a>
                            <button wire:click="edit({{ $article->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click="delete({{ $article->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
