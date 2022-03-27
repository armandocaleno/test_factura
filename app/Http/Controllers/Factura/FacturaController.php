<?php

namespace App\Http\Controllers\Factura;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\HandlerStack;

class FacturaController extends Controller
{
    public function factura()
    {
        return view('factura.factura')->extends('layouts.app')->section('body');
    }

    public function enviar(Request $request)
    {        
        // $comprobante = $request->file();
        
        $output = "";
        $result_code = "";

        // prueba que funciona bien
        // $response = system('java -jar C:\facturador\test.jar arguments', $output);
        

        //prueba con sistema modificado sin la parte gráfica
        // $response = exec('java -jar C:\facturador\nuevo\FACTDIRDBF.jar arguments', $output, $result_code);        
        
        // $response = exec('java -jar C:\facturador\nuevo\FACTDIRDBF.jar');     

        //prueba con sistema sin modificar
        // $response = shell_exec('java -jar C:\facturador\FACTDIRDBF.jar');

        //nuevo método
    //    try {
    //         $path = storage_path('app/public/jar/test.jar');
    //         $comando = ('java -jar'. $path);
    //         // $comando = system('java -jar C:\facturador\test.jar');
    //         $resp = shell_exec($comando);

    //         var_dump($resp);
    //    } catch (\Throwable $th) {
    //         var_dump( $th);
    //    }
        
        // $response = Http::get('http://localhost:3000/');
        // $test = $response->json();
        // dd($test);

        // $create = $client->request('POST', 'http://127.0.0.1:5111/admin/hotel', [
        //     'headers' => [
        //         'Content-Type' => 'text/xml; charset=UTF8',
        //     ],
        //     'body' => $xml                         
        // ]);

        //llega el archivo vacío
        // $response = Http::post('http://localhost:3000/api/xml', [
        //     'headers' => [
        //         'Content-Type' => 'application/xml; charset=UTF8',
        //     ],
        //     'body' => $request->file()
        // ]);

        $data = [
            'razonSocial' => 'Armando Caleño'
        ];

        // $response = Http::post('http://localhost:3000/api/xml', [
        //     'headers' => [
        //         'Content-Type' => 'application/json; charset=UTF8',
        //     ],
        //     'body' => json_encode($data, JSON_UNESCAPED_UNICODE)
        // ]);            


        //no da error pero no se recibe nada en la API tanto comoo asMultipart como en asForm
        // $response = Http::asForm($request->file(), 'text/xml')->post('http://localhost:3000/api/movies');
       

        $client = new Client([            
            'base_uri' => 'http://localhost:3000/api/',            
            'timeout'  => 3.0,
        ]);

        // $response = $client->request('POST', '/movies', [
        //     'multipart' => [
        //         [
        //             'name' => 'factura',
        //             'contents' => Psr7\Utils::tryFopen('/storage/app/public/xml/2102202201092220060500120010020000000121234567812.xml', 'r'),
        //             'headers' => [
        //                 'Content-Type' => 'text/xml; charset=UTF8',
        //             ],
        //         ]
        //     ]            
        // ]);



        $xml = fopen('C:\Users\Armando\Downloads\Factura.xml', 'r');
        // if ($xml) {
        //     $response = Http::attach(
        //         'attachment', $xml, 'Factura.xml'
        //     )->post('http://localhost:3000/api/movies');
            
        //     $respuesta = $response->body();            
        //     dd($respuesta);            
        // }else {
        //     return "No se envió archivo";
        // }
       

        //funciona, recibe el xml en string      
        $response = $client->request('POST', 'xml', [
            'json' => $data
            ]);


        //  $response = $client->request('POST', 'xml', [
        //     'multipart' => [
        //         [
        //             'name' => 'factura',
        //             'contents' => $xml,
        //             'headers' => [
        //                 'Content-Type' => 'text/xml; charset=UTF8',
        //             ],
        //         ]
        //     ]            
        // ]);


        $contents = $response->getBody()->getContents();
        dd($contents);   
    }

    public function crear_xml()
    {        
        return view('factura.xml-factura');
    }
}
