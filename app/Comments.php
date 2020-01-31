<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
