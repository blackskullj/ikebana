<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function index(){
      $docs = DB::table('documentos')->get();

      return view('documentos.documentoIndex', compact('docs'));
      //  ->with([docs=>$docs]);
    }
}
