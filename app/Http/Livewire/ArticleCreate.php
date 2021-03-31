<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class ArticleCreate extends Component
{
    public $isOpen = 0;
    public $saveSuccess = false;
    public $article;


    public function render()
    {
        return view('livewire.article-create');
    }

    public function mount(){
        $this->article = new Article;
    }

    public function saveArticle(){
//
//        ['id' => $this->article_id],
//            ['title' => $this->title,
//                'body' => $this->body,
//                'slug' => $this->slug,
//                'author' => $this->author,
//                'addedBy' => Auth::user()->id
//
//            ];
        $this->article->user_id = Auth::user()->id;
        $article->slug =

        $this->article->save();
        $this->saveSuccess = true;
    }




}
