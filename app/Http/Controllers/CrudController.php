<?php

namespace App\Http\Controllers;

use App\CodigosPostales;

class CrudController extends Controller
{
    public function index(){
       $cp = CodigosPostales::get();
       //return view('crud.index', compact('cp'));
        return $cp;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard(){
        return view('crud.dashboard');
    }

    /**
     * @param $codigoPostal
     * @return mixed
     */
    public function buscaCodigoPostal($codigoPostal){
        $codigosPostales = CodigosPostales::findOrFail($codigoPostal);

        return $codigosPostales;
    }

    /**
     *
     */
    public function create(){
        //formulario
    }

    public function store(){
        //guardar
    }

    /**
     * @param $idCodigoPostal
     * @return mixed
     */
    public function edit($idCodigoPostal){
        $cp = CodigosPostales::findOrFail($idCodigoPostal);
        //formulario
        return $cp;
    }

    /**
     * @param $idCodigoPostal
     * @return mixed
     */
    public function destroy($idCodigoPostal){
        return CodigosPostales::where('id_codigo_postal', '=', $idCodigoPostal)->delete();

    }


}
