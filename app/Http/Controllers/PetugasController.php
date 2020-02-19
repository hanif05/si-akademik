<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (request()->ajax()) {
            $data = Petugas::all();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('aksi', function($data){
                    // $edit = route('petugas.edit', $data->id);
                    $aksi = '<a href="javascript:void(0)" data-id="'.$data->id.'" data-toogle="tooltip" class="edit fa fa-pencil editPetugas"></a> | ';
                    $aksi = $aksi. '<a href="javascript:void(0)" data-id="'.$data->id.'" data-toogle="tooltip" class="fa fa-trash deletePetugas"></a>';
                    return $aksi;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('pages.petugas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Petugas::updateOrCreate(['id' => $request->id], [
            'name' => $request->name,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
        
        
        return response()->json(['success' => 'Data Berhasil Disimpan', 201]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Petugas $petugas)
    {
        return response()->json($petugas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petugas $petugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petugas $petugas)
    {
        //
    }
}
