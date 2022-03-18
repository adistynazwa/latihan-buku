<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::all();
        return view("buku",compact('bukus'));
    }

    public function add()
    {
        return view("add");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("buku");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'judul','author','sinopsis','penerbit' => 'required'
        // ]);

        // $input = $request->all();
        // $buku  = Buku::create($input);
        // return back()->with('success',' Task baru berhasil dibuat.');

        Buku::create($request->all());
        return redirect()->route("buku");

    }

    // public function insertdata(Request $request)
    // {
    //     Buku::create($request->all());
    // }

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
    public function tampilkandata($id)
    {
        $bukus = Buku::find($id);
        return view("tampil",compact('bukus'));
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
        $buku = Buku::find($id);
        $buku->update($request->all());
        return redirect()->route('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()->route('buku')->with('success', ' Data berhasil di hapus');
    }

    public function detail($id)
    {
        $bukus = Buku::find($id);
        return view("detail",compact('bukus'));
    }
}
