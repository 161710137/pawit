<?php

namespace App\Http\Controllers;

use App\mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobils = Mobil::with('mobil')->get();
        return view('mobil.index',compact('mobils'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $mobils = Mobil::all();
        return view('mobil.create',compact('mobils'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required|',
            'merk'=>'required|',
            'tipe'=>'required|',
            'gambar'=>'required|',
            'merk_id'=>'required|',
            'tipe_id'=>'required|'
        ]);
        $mobils = new Mobil;
        $mobils = nama = $request->nama;
        $mobils = merk = $request->merk;
        $mobils = tipe = $request->tipe;

        // upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destination,$filename);
            $mobil->gambar=$filename;
        }
            $mobils->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(mobil $mobil)
    {
        $mobils = new Mobil;
        $mobils = nama = $request->nama;
        $mobils = merk = $request->merk;
        $mobils = tipe = $request->tipe;
        
        // edit upload gambar
            if ($request->hasFile('gambar')){
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath,$filename);

        // hapus gambar lama jika ada
            if ($mobils->gambar){
                $old_gambar = $mobils->gambar;
                $filepath = public_path().DIRECTORY_SEPARATOR.'/assets/img/gambar/'
                try{
                    File::delete($filepath);
                }catch(FileNotFoundException $e);
            // file sudah dihapus atau tidak ada
            }
        }
        $mobils->gambar=$filename;
        $mobils->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(mobil $mobil)
    {
        $mobils = Mobil::findOrFail($mobils->id);
        if($mobils->gambar){
            $old_gambar = $mobils->gambar;
            $filepath = public_path().DIRECTORY_SEPARATOR.'/assets/img/gambar/';
            .DIRECTORY_SEPARATOR.$mobils->gambar;
            try{
                File::delete($filepath);
            }catch(FileNotFoundException $e);
            // File sudah dihapus/tidak ada
        }
        $mobils->delete();
    return redirect()->route('mobil.index');
    }
}
