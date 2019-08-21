<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = ['nama', 'jk', 'tmpt_lahir', 'tgl_lahir', 'agama', 'no_hp', 'alamat', 'foto', 'user_id', 'kelas_id'];

    public function kelas()
    {
    	return $this->belongsTo(Kelas::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
