<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use App\Documento;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function index(){
      $docs = Documento::all();
      //where('id','>','1')
      //->orWhere('envia','Alejandra')
      //->orWhere('dirigido', 'Ivan')
      //->get();
      //dd($docs);

      return view('documentos.documentoIndex', compact('docs'));
      //  ->with([docs=>$docs]);
    }
}
