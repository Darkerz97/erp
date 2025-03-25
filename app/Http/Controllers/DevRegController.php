<?php

namespace App\Http\Controllers;
use App\Models\dev_reg_model; // Asegúrate de importar el modelo Registro
use Illuminate\Http\Request;

class DevRegController extends Controller
{

    public function index()
    {
        return view('storage.repairs_reg_view');
    }

    public function create()
    {
        return view('storage.repairs_reg_view');
    }

    public function save(Request $request)
    {
        //dd($request->all()); // Agrega esta línea para depurar
        $data = $request->all();

        DevRegController::create($data);

        
       

        
        DevRegController::create($request->all());

        return redirect()->route('repairs_reg.index')->with('success', 'Registro guardado correctamente.');
        

    }
}






