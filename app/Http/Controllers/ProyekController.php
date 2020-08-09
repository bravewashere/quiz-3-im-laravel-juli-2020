<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.formproyek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = DB::table('proyeks')->insert([
            "nama_proyek" => $request["nama_proyek"],
            "deskripsi_proyek" => $request["deskripsi_proyek"],
            "tgl_mulai" => $request["tgl_mulai"],
            "tgl_deadline" => $request["tgl_deadline"],
            "status" => $request["status"]
            
        ]);
        return redirect('/proyek/create');
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
        //
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
    }


    public function gambar(){
        $path = public_path().'/images/ERDKaryawan.png';
        $headers = array(
            'Content-Type:image/jpg',
          );
      
     
        return response()->file($path, $headers);  
    }

    public function proyek(){
    	return view('layouts.proyek');
       
    }

}
