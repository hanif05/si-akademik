<?php

namespace App\Http\Controllers;

use App\MataPelajaran;
use Illuminate\Http\Request;
use DataTables;
use Alert;
class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.mapel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = new MataPelajaran();

        return view('pages/mapel/form', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = MataPelajaran::create(request()->all());

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(MataPelajaran $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(MataPelajaran $mapel)
    {
        return view('pages/mapel/form', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataPelajaran $mapel)
    {
        $mapel->update(request()->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = MataPelajaran::findOrFail($id);
        $model->delete();   
    }

    public function dataTable()
    {
        $data = MataPelajaran::query();

        return DataTables::of($data)
            ->addColumn('aksi', function($data){
                return view('layouts/includes/_action', [

                    'data' => $data,
                    'url_edit' => route('mapel.edit', $data->id),
                    'url_destroy' => route('mapel.destroy', $data->id)


                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['aksi'])->make(true);
    }
}
