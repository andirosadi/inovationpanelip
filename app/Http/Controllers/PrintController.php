<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Inovasi;
use PDF;
use DB;

class PrintController extends Controller
{
    public function printInovasi($id)
    {
      $inovasi = DB::table('inovasi')
        ->join('users', 'inovasi.user_id', '=', 'users.id')
        ->select('inovasi.*', 'users.name')
        ->get();
      PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
      $pdf = PDF::loadView('print.printinovation', $inovasi);
      return $pdf->stream();
    }
}
