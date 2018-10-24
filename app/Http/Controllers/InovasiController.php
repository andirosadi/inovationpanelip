<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Inovasi;
use DB;

class InovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inovasi = DB::table('inovasi')
          ->where('inovasi.user_id', '=', Auth::user()->id)
          ->get();
          return view('inovator.inovationlist',['inovasi'=>$inovasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inovator.inovasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inovasi = new Inovasi();
        $inovasi->user_id = Auth::user()->id;
        $inovasi->judul = $request->judul;
        $inovasi->writer = $request->writer;
        $inovasi->abstract = $request->abstract;
        $inovasi->katakunci = $request->katakunci;
        $inovasi->latarb = $request->latarb;
        $inovasi->maksud = $request->maksud;
        $inovasi->ruanglingkup = $request->ruanglingkup;
        $inovasi->metodelogi = $request->metodelogi;
        $inovasi->landasant = $request->landasant;
        $inovasi->rpcs = $request->rpcs;
        $inovasi->idea = $request->idea;
        $inovasi->tidea = $request->tidea;
        $inovasi->tprio = $request->tprio;
        $inovasi->mprio = $request->mprio;
        $inovasi->pelaksanaan = $request->pelaksanaan;
        $inovasi->manfaatf = $request->manfaatf;
        $inovasi->roi = $request->roi;
        $inovasi->manfaatn = $request->manfaatn;
        $inovasi->analisar = $request->analisar;
        $inovasi->tanalisar = $request->tanalisar;
        $inovasi->kesimpulan = $request->kesimpulan;
        $inovasi->saran = $request->saran;
        $inovasi->revisi = $request->revisi;
        $inovasi->status = $request->status;
        $inovasi->save();
        return redirect()->route('inovasi.index')->with('alert-success', 'Inovasi berhasil dibuat!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $inovasi = Inovasi::where('id', $id)
      ->get();
      return view('inovator.open', compact('inovasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Form Revisi Inovasi
        $inovasi = Inovasi::where('id', $id)->get();
        return view('inovator.e_inovasi', compact('inovasi'));
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
        //Simpan Revisi Inovasi
        $inovasi = Inovasi::where('id', $id)->first();
        $inovasi->judul = $request->judul;
        $inovasi->writer = $request->writer;
        $inovasi->abstract = $request->abstract;
        $inovasi->katakunci = $request->katakunci;
        $inovasi->latarb = $request->latarb;
        $inovasi->maksud = $request->maksud;
        $inovasi->ruanglingkup = $request->ruanglingkup;
        $inovasi->metodelogi = $request->metodelogi;
        $inovasi->landasant = $request->landasant;
        $inovasi->rpcs = $request->rpcs;
        $inovasi->idea = $request->idea;
        $inovasi->tidea = $request->tidea;
        $inovasi->tprio = $request->tprio;
        $inovasi->mprio = $request->mprio;
        $inovasi->pelaksanaan = $request->pelaksanaan;
        $inovasi->manfaatf = $request->manfaatf;
        $inovasi->roi = $request->roi;
        $inovasi->manfaatn = $request->manfaatn;
        $inovasi->analisar = $request->analisar;
        $inovasi->tanalisar = $request->tanalisar;
        $inovasi->kesimpulan = $request->kesimpulan;
        $inovasi->saran = $request->saran;
        $inovasi->save();
        return redirect()->route('inovasi.index')->with('alert-success', 'Inovasi berhasil direvisi');
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
    // public function print($id)
    // {
    //   $inovasi = Inovasi::all();
    //   PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
    //   $pdf = PDF::loadView('print.printinovation', $inovasi);
    //   return $pdf->stream();
    // }
}
