<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Inmuebles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function __invoke ()
    {
        // $inmuebles = Inmuebles::where('estado', '1')->latest('id')->get();
        // $inmuebles_populares = Inmuebles::where('estado', '1')->latest('users_alquiler_count')->get()->take(4);
        $user = '811008756';
        $pass = 'somospropiedad';

        //api para listar home 
         $api = Http::get('https://www.softinm.co/api/inmuebles/listar/811008756/somospropiedad?cantidadporpagina=8&&order=fecha_consignacion');
         $inmuebles = $api->json();

        //api mas populares
         $apip = Http::get('https://www.softinm.co/api/inmuebles/listar/811008756/somospropiedad?cantidadporpagina=8&destacado=1');
         $populares = $apip->json() ;


          
            
               
            
        




       
      return view('welcome',compact('inmuebles','populares'));
    }

}
