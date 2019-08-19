<?php

namespace App\Http\Controllers;

use App\Materi;
use App\Guru;
use App\MataPelajaran;
use Alert;
use DataTables;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/materi/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = auth()->user()->guru->id;

        $d_guru = Guru::findOrFail($guru);

        return view('pages/materi/form', compact('d_guru'));
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

            'pokok_bahasan' => 'required',
            'keterangan' => 'required'
        ]);

        $mapel = auth()->user()->guru->mata_pelajaran_id;

        $d_guru = auth()->user()->guru->id;

        Materi::create([

            'guru_id' => $d_guru,
            'mata_pelajaran_id' => $mapel,
            'pokok_bahasan' => $data['pokok_bahasan'],
            'keterangan' => $data['keterangan']


        ]);

        return redirect('/materi')->with('berhasil', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        //
    }

    public function dataTable()
    {

        $data = Materi::join('guru', 'materi.guru_id', '=', 'guru.id')
            ->join('mata_pelajaran', 'materi.mata_pelajaran_id', '=', 'mata_pelajaran.id')
            ->select(['materi.id', 'guru.nama', 'mata_pelajaran.kode', 'materi.pokok_bahasan', 'materi.keterangan', 'materi.created_at'])
            ->orderBy('materi.created_at', 'DESC');



        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }


}
