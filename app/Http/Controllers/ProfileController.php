<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Guru;
use App\Profile;

class ProfileController extends Controller
{
    public function index()
    {
    	$data = auth()->user()->id;

    	$user = User::findOrFail($data);
    	return view('pages.profile.index', compact('user'));
    }

    public function updateGuru(Request $request, Guru $guru)
    {
    	// Update di table User
    	$id_user = auth()->user()->id;
    	$user = User::find($id_user);
    	$user->name = $request->nama;
    	$user->update();

    	// Update di table Guru
    	$guru->update($request->all());
        return redirect('/profile')->with('berhasil', 'Data berhasil disimpan');
    }

    public function updateSiswa(Request $request, Siswa $siswa)
    {
    	// Update di table User
    	$id_user = auth()->user()->id;
    	$user = User::find($id_user);
    	$user->name = $request->nama;
    	$user->update();

    	// Update di table Guru
    	$siswa->update($request->all());
        return redirect('/profile')->with('berhasil', 'Data berhasil disimpan');
    }
}
