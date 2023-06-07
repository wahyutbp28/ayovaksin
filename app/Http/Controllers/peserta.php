<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class peserta extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = DB::table('peserta')->get();

        return view('pages.peserta.tampil' , ['peserta' =>$peserta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.peserta.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ]);
        DB::table('peserta')->insert([
            'nik'=>$request["nik"],
            'nama'=>$request["nama"],
            'jk'=>$request['jk'],
            'tempat_lahir'=>$request['tempat_lahir'],
            'tgl_lahir'=>$request['tgl_lahir'],
            'alamat'=>$request['alamat'],
            'no_hp'=>$request['no_hp'],
        ]);
        return redirect('/peserta');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nik)
    {
        $peserta = DB::table('peserta')->where('nik',$nik)->first();

        return view('pages.peserta.edit',['peserta' =>$peserta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik)
    {
        $request->validate([
            'nik'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ]);

        DB::table('peserta')
        -> where('nik',$nik)
        ->update(
            ['nik'=>$request->nik,
            'nama'=>$request->nama,
            'jk'=>$request->jk,
            'tempat_lahir'=>$request->tempat_lahir,
            'tgl_lahir'=>$request->tgl_lahir,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp
            
            
            ]
        
        );

        return redirect('/peserta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        DB::table('peserta')->where('nik',$nik)->delete();

        return redirect ('/peserta');
    }
}
