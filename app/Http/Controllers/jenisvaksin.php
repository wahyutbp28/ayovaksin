<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jenisvaksin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisvaksin = DB::table('jenisvaksin')->get();

        return view('pages.jenisvaksin.tampil' , ['jenisvaksin' =>$jenisvaksin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jenisvaksin.tambah');
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
            'nama_vaksin'=>'required'
        ]);
        DB::table('jenisvaksin')->insert([
            'nama_vaksin'=>$request["nama_vaksin"]
        ]);
        return redirect('/jenisvaksin');
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
    public function edit($id)
    {
        $jenisvaksin = DB::table('jenisvaksin')->where('id',$id)->first();

        return view('pages.jenisvaksin.edit',['jenisvaksin' =>$jenisvaksin]);
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
        $request ->validate([
            'nama_vaksin'=>'required'
        ]);
        DB::table('jenisvaksin')
        ->where('id',$id)
        ->update(
            ['nama_vaksin'=>$request->nama_vaksin]
        );
        return redirect('/jenisvaksin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('jenisvaksin')->where('id',$id)->delete();

        return redirect ('/jenisvaksin');
    }
}
