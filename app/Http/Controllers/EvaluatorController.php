<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Inovasi;
use App\Role;
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
        // $evaluator = User::with('role')->where('role_id','3')
        //   // ->join('inovasi', 'inovasi.user_id', '=', 'users.id')
        //   // ->select('inovasi.judul')
        //   ->get();
        // return view('evaluator.userlist',compact('evaluator'));
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
        //Tambah Revisi
        $evaluator = Inovasi::where('id', $id)->get();
        return view('evaluator.addrevision', compact('evaluator'));
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
        $evaluator = Inovasi::where('id', $id)->first();
        $evaluator->revisi = $request->revisi;
        $evaluator->status = $request->status;
        $evaluator->save();
        return redirect()->route('evaluators.index')->with('alert-success', 'Berhasil menambahkan revisi');
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
