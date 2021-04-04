<?php


namespace App\Http\Livewire;


use App\Models\Article;

class ShowArticle
{
    public $article;
    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function show(Article $article)
    {
        return view('livewire.show', ['article' => $article])->extends('layouts.app')->section('content');

    }
}
