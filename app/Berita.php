<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    protected $table = 'berita';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comments::class, 'commentable')->whereNull('parent_id');
    }

    use Sluggable;
    /**
    * Return the sluggable configuration array for this model.
    *
    * @return array
    */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getTumbnail()
    {
        if(!$this->tumbnail){
            return asset('/img/no-thumbnail.png');
        }
        return asset('/storage/'.$this->tumbnail);
    }
}
