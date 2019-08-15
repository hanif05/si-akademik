<?php

namespace App\Http\Controllers;
use App\Guru;
use App\User;
use Illuminate\Http\Request;
use DataTables;
use Alert;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.guru.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = new Guru();

        return view('pages/guru/form2', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = request()->validate([

        //     'nip' => 'required|max:12',

        // ]);

        $user = new User;
        $user->level_id = '2';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('password');
        $user->remember_token = str_random(60);
        $user->save();

        //insert tabel siswa
        $request->request->add ([ 'user_id' => $user->id ]);

        $data = Guru::create($request->all());
        return redirect('/guru')->with('berhasil', 'Data berhasil di simpan');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('pages/guru/edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $guru->update(request()->all());
        return redirect('/guru')->with('berhasil', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
    }

    public function dataTable()
    {
        $data = Guru::query();

        return DataTables::of($data)
            ->addColumn('aksi', function($data){
                return view('layouts/includes/_action2', [
                    'data' => $data,
                    'url_edit2' => route('guru.edit', $data->id),
                    'url_destroy2' => route('guru.destroy', $data->id),


                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['aksi'])
            ->make(true);
    }
}
