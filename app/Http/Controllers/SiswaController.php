<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\User;
use App\Kelas;
use Alert;
use DataTables;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.siswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('pages.siswa.form', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request()->validate([

            'nama' => 'required',
            'kelas_id' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'foto' => ['required', 'image'],

        ]);


        $user = new User;
        $user->email = $request->email;
        $user->name = $request->nama;
        $user->level_id = '3';
        $user->password = bcrypt('password');
        $user->remember_token = str_random(60);
        $user->save();

         // Foto
        $imagePath = request('foto')->store('uploads/guru', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400);
        $image->save();

        $user_id = $request->request->add(['user_id' => $user->id]);

        Siswa::create([

            'nama' => $data['nama'],
            'kelas_id' => $data['kelas_id'],
            'jk' => $data['jk'],
            'tmpt_lahir' => $data['tmpt_lahir'],
            'tgl_lahir' => $data['tgl_lahir'],
            'agama' => $data['agama'],
            'no_hp' => $data['no_hp'],
            'alamat' => $data['alamat'],
            'user_id' => $user['id'],
            'foto' => $imagePath

        ]);

        return redirect('/siswa')->with('berhasil', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        $kelas = Kelas::all();
        return view('pages.siswa.edit', compact('siswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update(request()->all());
        return redirect('/siswa')->with('berhasil', 'Data berhasil di simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
    }

    public function dataTable()
    {
        $data = Siswa::join('kelas', 'siswa.kelas_id', '=' , 'kelas.id')->select('siswa.id', 'kelas.nama_kelas', 'siswa.nama', 'siswa.tmpt_lahir', 'siswa.tgl_lahir', 'siswa.agama', 'siswa.jk', 'siswa.alamat', 'siswa.no_hp', 'siswa.foto');

        return DataTables::of($data)
            ->addColumn('aksi', function($data){
                return view('layouts.includes._action2', [
                    'data' => $data,
                    'url_edit2' => route('siswa.edit', $data->id),
                    'url_destroy2' => route('siswa.destroy', $data->id)
                ]);
            })
            ->addColumn('foto', function($data){
                $url = asset('/storage/'. $data->foto);
                return '<img src="'.$url.'" border="0" width="50" class="img-rounded" align="center" />';
            })
            ->addIndexColumn()
            ->rawColumns(['foto', 'aksi'])->make(true);
    }
}
