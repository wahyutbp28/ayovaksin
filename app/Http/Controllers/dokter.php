<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dokter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = DB::table('dokter')->get();

        return view('pages.dokter.tampil' , ['dokter' =>$dokter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dokter.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'nip'=>'required',
            'nama_dokter'=>'required'
        ]);
        DB::table('dokter')->insert([
            'nip'=>$request["nip"],
            'nama_dokter'=>$request["nama_dokter"]
        ]);
        return redirect('/dokter');
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
    public function edit($nip)
    {
        $dokter = DB::table('dokter')->where('nip',$nip)->first();

        return view('pages.dokter.edit',['dokter' =>$dokter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nip)
    {
        $request ->validate([
            
            'nama_dokter'=>'required'
        ]);
        DB::table('dokter')
        ->where('nip',$nip)
        ->update(
            ['nama_dokter'=>$request->nama_dokter]
        );
        return redirect('/dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nip)
    {
        DB::table('dokter')->where('nip',$nip)->delete();

        return redirect ('/dokter');
    }
}
