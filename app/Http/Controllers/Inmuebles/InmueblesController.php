<?php

namespace App\Http\Controllers\Inmuebles;

use App\Http\Controllers\Controller;
use App\Models\Inmuebles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InmueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $vent, $arrent = 'p';

    public function ReplaceVent()
    {
        $this->vent = '&destinacion=arriendo';
    }

    public function index()
    {
        $clasep = '';
        // $inmuebles = Inmuebles::where('estado', '1')->latest('id')->get();
        $api = Http::get('https://www.softinm.co/api/inmuebles/listar/811008756/somospropiedad?cantidadporpagina=12&order=fecha_ofrecer_inmueble&type_order=desc' . $clasep);
        $inmuebles = $api->json();


        return view('inmuebles.index', compact('inmuebles', 'clasep'));
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
    public function show($popular)
    {
        $api = Http::get('https://www.softinm.co/api/inmuebles/listar/811008756/somospropiedad?cantidadporpagina=12&order=fecha_ofrecer_inmueble&type_order=desc&codigo=' . $popular);
        $inmuebles = $api->json();

        $api = Http::get('https://www.softinm.co/api/inmuebles/listar/811008756/somospropiedad?cantidadporpagina=12&order=fecha_ofrecer_inmueble&type_order=desc&destinacion=arriendo');
        $relacionado1 = $api->json();

        $api = Http::get('https://www.softinm.co/api/inmuebles/listar/811008756/somospropiedad?cantidadporpagina=12&order=fecha_ofrecer_inmueble&type_order=desc&destinacion=venta&destacado=1');
        $relacionado2 = $api->json();


        return view('inmuebles.show', compact('inmuebles', 'relacionado1', 'relacionado2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
