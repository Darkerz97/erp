<?php

namespace App\Http\Controllers;
use App\Models\dev_reg_model; // Asegúrate de importar el modelo Registro
use Illuminate\Http\Request;

class dev_reg_controller extends Controller
{
    public function create()
    {
        return view('storage.repairs_reg_view');
    }

    public function save(Request $request)
    {
        $request->validate([
            'arrival_date' => 'required|date',
            'shimpent_date' => 'required|date',
            'serial_number' => 'required|string|max:255',
            'sales_worker' => 'required|string|max:255',
            'lab_worker' => 'required|string|max:255',
            'warehouse_address' => 'required|string|max:255',
            'priority' => 'required|string|in:Baja,Media,Alta',
            'initial_diagnosis' => 'required|string',
        ]);

        dev_reg_controller::create($request->all());

        return redirect()->route('dev_reg_controller.create')->with('success', 'Registro guardado correctamente.');
    }
}






