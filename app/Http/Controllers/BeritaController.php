<?php

namespace App\Http\Controllers;

use App\Berita;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.berita.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        // Foto
        if ($request->tumbnail) {
            $imagePath = request('tumbnail')->store('uploads/berita', 'public');
    
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400);
            $image->save();
            $data['tumbnail'] = $imagePath;
        }

        if ($request->title) {
            $data['title'] = ucwords($request->title);
        }

        $data['user_id'] = auth()->user()->id;

        if ($data) {
            Berita::create($data);
            return redirect()->route('berita.index')->with('berhasil', 'Data Berhasil Ditambahkan');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }

    public function DataTable()
    {

        $data = Berita::join('users', 'berita.user_id', '=', 'users.id')->select('berita.id' , 'berita.title', 'berita.content', 'users.name', 'berita.tumbnail');
        
        return DataTables::of($data)
            ->addColumn('tumbnail', function($data){
                return '<img src="'.$data->getTumbnail().'" border="0" width="50" class="img-rounded" align="center" />';
            })
            ->addIndexColumn()->rawColumns(['tumbnail'])->make(true);
    }
}
