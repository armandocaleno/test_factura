<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home()
    {
        // $response = Http::get('https://jsonplaceholder.typicode.com/photos');
        
        // $photos = $response->json();        

        return view('dashboard');
    }    
}
