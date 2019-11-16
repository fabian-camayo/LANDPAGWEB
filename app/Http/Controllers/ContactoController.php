<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Http\Requests\ContactoValidacion;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tipo(Request $request)
    {
        $data = $request->tipo;
        return view('landpag', compact('data'));
        
    }

    public function guardar(ContactoValidacion $request)
    {
        Contacto::create($request->all());
        $data = 'Gracias por contactarnos';
        return view('landpag', compact('data'));
        
    }

}