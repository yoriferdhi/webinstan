<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory, Sluggable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';
    protected $guarded = ['id'];

    /**
    * Get the route key for the model.
    */
    public function getRouteKeyName()
    {
        return 'url';
    }

    public function sluggable(): array
    {
        return [
            'url' => [
                'source' => 'title'
            ]
        ];
    }
}
