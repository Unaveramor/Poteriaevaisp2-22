<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;

    protected $table = 'categories';
    protected $fillable = [
        'title',
        'slyg'
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source' => 'title'
            ]
        ];
    }
}
