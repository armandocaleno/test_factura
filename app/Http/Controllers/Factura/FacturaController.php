<?php

namespace App\Http\Controllers\Factura;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function factura()
    {
        return view('factura.factura')->extends('layouts.app')->section('body');
    }

    public function enviar(Request $request)
    {        
        $comprobante = $request->file();

        $response = system('java -jar C:\Users\Armando\Downloads\FACTDIRDBF.jar arguments', $comprobante);        
        dd($response);
    }
}
