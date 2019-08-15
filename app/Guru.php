<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = ['nip', 'user_id', 'nama', 'jk', 'tmpt_lahir', 'tgl_lahir', 'telp', 'alamat', 'foto'];
}
