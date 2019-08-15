<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = ['nip', 'user_id', 'nama', 'jk', 'tmpt_lahir', 'tgl_lahir', 'telp', 'alamat', 'foto'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    // public function profileImage()
    // {
    //     $imagePath = ($this->foto) ? $this->foto : 'uploads/6FbQUuCmOcVPNkBFi87dPD8pEgl8Ni1wvynaRCtw.png';

    //     return '/storage/' . $imagePath;

    // }
}
