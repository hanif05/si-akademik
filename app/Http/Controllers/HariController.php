<?php

namespace App\Http\Controllers;

use App\Hari;
use Illuminate\Http\Request;
use DataTables;

class HariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.hari.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hari = new Hari;
        return view('pages.hari.form', compact('hari'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Hari::create(request()->all());

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hari  $hari
     * @return \Illuminate\Http\Response
     */
    public function show(Hari $hari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hari  $hari
     * @return \Illuminate\Http\Response
     */
    public function edit(Hari $hari)
    {
        return view('pages.hari.form', compact('hari'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hari  $hari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hari $hari)
    {
        $hari->update(request()->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hari  $hari
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hari $hari)
    {
        $hari->delete();
    }

    public function dataTable()
    {
        $data = Hari::query();

        return DataTables::of($data)
            ->addColumn('aksi', function($data){
                return view('layouts.includes._action', [
                    'data' => $data,
                    'url_edit' => route('hari.edit', $data->id),
                    'url_destroy' => route('hari.destroy', $data->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['aksi'])->make(true);
    }
}
