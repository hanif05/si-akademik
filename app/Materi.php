<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';

    protected $guarded = [];

    public function guru()
    {
    	return $this->belongsTo(Guru::class);
    }

    public function mataPelajaran()
    {
    	return $this->belongsTo(MataPelajaran::class);
    }
}
