<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory,Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    protected $fillable = ['title','slug','author','thumbnail','body','addedBy'];

    public function path(){
        return route('article.show', $this);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}

