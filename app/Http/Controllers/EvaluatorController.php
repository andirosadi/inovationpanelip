<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Inovasi;
use DB;

class EvaluatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluator = DB::table('inovasi')
          ->join('users', 'inovasi.user_id', '=', 'users.id')
          ->select('inovasi.*', 'users.name')
          ->get();
          return view('evaluator.userlist',['evaluator'=>$evaluator]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('evaluator.open', compact('inovasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //Tambah Revisi
      $inovasi = Inovasi::where('id', $id)
      ->get();
      return view('evaluator.addrevision', compact('inovasi'));
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
      //Save Revisi
      $inovasi = Inovasi::where('id', $id)->first();
      $inovasi->revisi = $request->revisi;
      $inovasi->status = $request->status;
      $inovasi->save();
      return redirect('evaluators')->with('alert-success', 'Berhasil menambahkan revisi');
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
}
