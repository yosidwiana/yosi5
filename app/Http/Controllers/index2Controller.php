<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kategoriModel;

class index2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mendenifisikan kata kuci
        $cari = $request->q;
        //mencari data di database
        $kategori = DB::table('kategori')
		->where('nama_kategory','like',"%".$cari."%")
		->paginate();
        //return data ke view
        return view('category.index',['kategori' => $kategori]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::table('kategori')->insert([
            'nama_kategory' => $request->nama_kategory,
            'slug' => $request->slug,
            'tanggal_input_data' => $request->tanggal_input_data
          ]);

        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = DB::table('kategori')->where('id',$id)->get();
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('kategori')->where('id',$id)->update([
           
            'nama_kategory' => $request->kategori,
            'slug' => $request->slug,
            'tanggal_input_data' => $request->tanggal_input_data
        ]);
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('kategori')->where('id', $id)->delete();
        return redirect('category');
    }
}
