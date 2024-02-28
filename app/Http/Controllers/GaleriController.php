<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::where('iduser',Auth::user()->id)->get();
        return view('timeline',['galeris'=>$galeri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required'
        ]);

        $namafoto = Auth::user()->id."-".date('YmdHis').
        $request->foto->getClientOriginalName();
        $request->foto->move(public_path('img'),$namafoto);
        $data = [
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
            'tanggal'=>now(),
            'foto'=>$namafoto,
            'iduser'=>Auth::user()->id
        ];
        galeri::create($data);
        return redirect('galeri');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeris  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Galeri::where('id',$id)->delete();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeris  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(galeri $galeri)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaleriRequest  $request
     * @param  \App\Models\Galeris  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // if ($request->hasFile('foto')) {
        //     $namafoto = Auth::user()->id.'-'.date('YmdHis').
        //     $request->foto->getClientOriginalName();
        //     $request->foto->move(public_path('img'),$namafoto);
        //     $galeri->judul = $request->judul;
        //     $galeri->foto = $namafoto;
        //     $galeri->deskripsi = $request->deskripsi;
        //     $galeri->tanggal = now();
        //     $galeri->user_id = Auth::user()->id;
        //     $galeri->save();
        // }else{
        //     $galeri->judul=$request->judul;
        //     $galeri->foto=$galery->foto;
        //     $galeri->deskripsi=$request->deskripsi;
        //     $galeryi->tanggal = now();
        //     $galeri->user_id=Auth::user()->id;
        //     $galeri->save();
        // }

        $file = $request->foto;

        if(isset($foto)){
            $namafile = date('YmdHis')."-".$request->foto->getClientOriginalExtension();

            $request->foto->move(public_path('img'), $namafile);

            $data = [
                'foto' => $namafile,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi
            ];

            Galeri::where('id', $id)->update($data);
        }else{
            $data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi
            ];

            Galeri::where('id', $id)->update($data);
        }
         
        return redirect('galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeris  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
