<?php

namespace App\Http\Livewire;

use Cviebrock\EloquentSluggable\Services\SlugService;
use DOMDocument;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Articles extends Component
{
    public $articles, $title, $body, $article_id, $author, $slug, $addedBy;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @return Application|Factory|View
     * @var array
     */
    public function render()
    {
        $this->articles = Article::all();
        $user = \Auth::user();
        return view('livewire.manageArticles', [ 'user' => $user])
            ->extends('layouts.app-nofooter')
            ->section('content');



    }

    public function manage() {
        $articles = Article::latest()->paginate(10);
        return view('livewire.manageArticles', ['articles' => $articles]);

    }

    public function index()
    {
            $articles = Article::latest()->paginate(10);
            //dd($articles);
            return view('livewire.index', ['articles' => $articles]);
    }

    public function updatedTitle()
    {
        $this->slug = SlugService::createSlug(Article::class, 'slug', $this->title);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->title = '';
        $this->body = '';
        $this->article_id = '';
        $this->slug = '';
        $this->author = '';
        $this->addedBy = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store(Request $request)
    {
        $this->validate([
            'title' => 'required',
            'author' => 'required',
        ]);
        /* This section searches the body of the article.
            If the body contains an image, it stores the path
            of the thumbnail in the DB so it doesn't have to parse
            every article on the index views */
        $doc = new DOMDocument();
        @$doc->loadHTML($this->body);
        $images = $doc->getElementsByTagName('img');

        foreach ($images as $image) {
            $originalSource = $image->getAttribute('src');
        }
        $thumbnail = str_replace('/storage/photos/1/', '/storage/photos/1/thumbs/',$originalSource);

        Article::updateOrCreate(
            ['id' => $this->article_id],
            ['title' => $this->title,
                'body' => $this->body,
                'slug' => $this->slug,
                'thumbnail' => $thumbnail,
                'author' => $this->author,
                'addedBy' => auth()->user()->name
            ]);

        session()->flash('message',
            $this->article_id ? 'Article Updated Successfully.' : 'Article Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $this->article_id = $id;
        $this->title = $article->title;
        $this->body = $article->body;
        $this->slug = $article->slug;
        $this->author = $article->author;
        $this->addedBy = $article->addedBy;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Article::find($id)->delete();
        session()->flash('message', 'Article Deleted Successfully.');
    }
}
