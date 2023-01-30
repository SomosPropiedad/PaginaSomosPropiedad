<?php

namespace App\Http\Controllers\Formularios;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Comodidades;
use App\Models\Imagen;
use App\Models\Inmueble;
use App\Models\Propietario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Csrf;
use Illuminate\Support\Facades\Storage;

class FormularioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('formulario.formulario');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propietario = Propietario::where('user_id', Auth()->user()->id);
        $propietarios = Propietario::all();
        $categoria = Categoria::all();

        return view('formulario.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //metodo para crear propietario
    public function store(Request $request)
    {
          $request->validate([
              'nombre' => 'required',
              'apellido' => 'required',
              'telefono' => 'required',
              'correo' => 'required',
          ]);

         $propietario = Propietario::create($request->all());

        // return view('formulario.formulario');

        //return $request->all();
    }

    //metodo para subir el inmueble
    public function inmueble(Request $request)
    {
         $request->validate([
             'nombre' => 'required',
             'slug' => 'required|unique:inmueble',
             'precio' => 'required',
             'descripcion' => 'required',
         ]);

         $inmueble = Inmueble::create($request->all());
             //variable de session
          $miVariable = $inmueble;
          session(['miVariable' => $miVariable]);

         //return view('formulario.formulario');
        //return $request->all();
    }



    // public function data($inmueble)
    // {
    //     return view('formulario.formulario', compact('inmueble'));
    // }

    // metodo para subir las comodidades
    public function comodidades(Comodidades $comodidades,Request $request)
    {
         $request->validate([
             'municipio' => 'required',
             'barrio' => 'required',
             'tipo' => 'required',
             'destinacion' => 'required',
             'habitaciones' => 'required',
             'banos' => 'required',
             'closets' => 'required',
             'estrato' => 'required',
         ]);

         //$comodidades = Comodidades::create($request->all());
         $miVariable = session('miVariable');

          $comodidades->municipio = $request->get('municipio');
          $comodidades->barrio = $request->get('barrio');
          $comodidades->tipo_inmueble = $request->get('tipo_inmueble');
          $comodidades->destinacion = $request->get('destinacion');
          $comodidades->habitaciones = $request->get('habitaciones');
          $comodidades->banos = $request->get('banos');
          $comodidades->closets = $request->get('closets');
          $comodidades->estrato = $request->get('estrato');
          $comodidades->inmueble_id = $miVariable->id;
          $comodidades->save();



       // $variable = $this->comdid;

        

       // return var_dump($miVariable);

         //return redirect('livewire.comodidades-component');


        //return $request->all();
    }


    //metodo para subir las imagenes del inmueble
    public function files(Imagen $imagen, Request $request)
    {

        $request->validate([
            'file' => 'required|file',
        ]);
        // if (!is_string($request->file('file'))) {
        //     $request = (string) $request;
        // }

            $url = Storage::disk('public')->put('public/inmueble', $request->file('file'));
            $miVariable = session('miVariable');

             $imagen->url = $url;
             $imagen->imageable_id = $miVariable->id;
             $imagen->imageable_type = Inmueble::class;
             $imagen->save();

    



   /*         $imagen = Imagen::create([
                'url' => $url,
                'imageable_id' => $miVariable->id,
                'imageable_type' => Inmueble::class
            ]);*/




            //  $inmueble->imagen()->create([
            //      'url' => $url,
            //      'imageable_id' => $miVariable->id,
            //      'imageable_type' => $inmueble
            //  ]);


        //return $request->all();

      /* if ($request->file('file')) {
        return "se envio";
       }else{
        return "no se envio";
       }*/


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
