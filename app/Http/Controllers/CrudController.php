<?php

namespace App\Http\Controllers;
Use App\Crud;
use Illuminate\Http\Request;

use App\Http\Requests;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Crud::orderBy('id', 'Desc')->paginate(4);
        return view('show')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'nama_buah' => 'required',
          'harga' => 'required',
          'jumlah' => 'required'
        ]);

        $tambah = new Crud();
        $tambah->nama_buah = $request['nama_buah'];
        $tambah->harga = $request['harga'];
        $tambah->jumlah = $request['jumlah'];
        $tambah->save();

        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $tampilkan = Crud::find($id);
      return view('tampil')->with('tampilkan', $tampilkan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tampiledit = Crud::where('id', $id)->first();
      return view('edit')->with('tampiledit', $tampiledit);
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
       $update = Crud::where('id', $id)->first();
       $update->nama_buah = $request['nama_buah'];
       $update->harga = $request['harga'];
       $update->jumlah = $request['jumlah'];
       $update->update();

       return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $hapus = Crud::find($id);
       $hapus->delete();

       return redirect()->to('/');
    }
}
