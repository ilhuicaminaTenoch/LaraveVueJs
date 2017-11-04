<?php

namespace App\Http\Controllers;

use App\CodigosPostales;
use Illuminate\Http\Request;

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



    public function store(Request $request){
        //guardar
        $this->validate($request, [
            'id_estado' => 'required',
            'estado' => 'required',
            'estado' => 'required',
            'id_municipio' => 'required',
            'municipio' => 'required',
            'ciudad' => 'required',
            'zona' => 'required',
            'codigo_postal' => 'required',
            'asentamiento' => 'required',
            'tipo' => 'required'
        ]);
        CodigosPostales::created($request->all());//guarda los datos declarados en el modelo
        return;
    }

    /**
     * @param $idCodigoPostal
     * @return mixed
     */
    public function destroy($idCodigoPostal){
        return CodigosPostales::where('id_codigo_postal', '=', $idCodigoPostal)->delete();

    }


}
