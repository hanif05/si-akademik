<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    protected $table = 'hari';

    protected $fillable = ['kode_hari', 'nama_hari'];
}
