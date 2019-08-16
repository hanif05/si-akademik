<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajaran';

    protected $guarded = [];

    public function materi()
    {
    	return $this->hasOne(Materi::class);
    }
}
