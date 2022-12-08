<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;


class KomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('layout');
    }

    public function home()
    {
        $komputers =Komputer::all();
        return view('home',compact('komputers'));
    }

    public function komputer()
    {
        $komputers = Komputer::all();
        return view('komputer',compact('komputers'));
    }

    public function komputer_rusak()
    {
        $komputers = Komputer::all();
        return view('komputer_rusak',compact('komputers'));
    }

    public function updateKomputerRusak($id)
    {
        Komputer::where('id','=',$id)->update([
            'komputer_rusak' => 0
        ]);

        return redirect()->back()->with('done', 'komputer rusak');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $komputers = Komputer::all();
        return view('create',compact('komputers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
        'no_komputer' => 'required',
        'merk_komputer' => 'required',
       ]);

       Komputer::create([
        'no_komputer' => $request->no_komputer,
        'merk_komputer' => $request->merk_komputer,
        'ruang_penempatan' => 0,
       ]);
      return redirect('/komputer')->with('success','Berhasil menambah data komputer!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komputer  $komputer
     * @return \Illuminate\Http\Response
     */
    public function show(Komputer $komputer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komputer  $komputer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Menampilkan halaman input form edit 
        // Mengambil data satu baris ketika column id pada baris tersebut sama dengan id dari parameter route
        $komputers = Komputer::where('id',$id)->first();
        // kirim data yang diambil ke file blade dengan compact
        return view('edit',compact('komputers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komputer  $komputer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'no_komputer' => 'required',
            'merk_komputer' => 'required',
            'ruang_penempatan' => 'required',
        ]);

        Komputer::where('id',$id)->update([
            'no_komputer' => $request->no_komputer,
            'merk_komputer' => $request->merk_komputer,
            'ruang_penempatan' => $request->ruang_penempatan,
        ]);

        return redirect('komputer')->with('successUpdate','Data komputer berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komputer  $komputer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Komputer::find($id)->delete();
        return redirect('/komputer')->with('delete','Berhasil di hapus!');
    }
}
