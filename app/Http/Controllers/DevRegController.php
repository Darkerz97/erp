<?php

namespace App\Http\Controllers;
use App\Models\refurbish_orders; // Asegúrate de importar el modelo Registro
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\devices;


use Illuminate\support\Carbon;

class DevRegController extends Controller
{

    public function index()
    {
        return view('storage.repairs_reg_view');
    }

    public function create()
    {
       
        $customers = Customer::all();
        $users = User::Where('dpt','Laboratorio')->get();
        $salespe = User::Where('dpt','ventas')->get();
        $devicesc = devices::all();
       
        return view('storage.repairs_reg_view',[
            'customers'=> $customers,
            'users'=>  $users,
            'salespe'=> $salespe,
            'devicesc' => $devicesc,
        ]);

    }

    public function save(Request $request)
    {
       // dd($request->all()); // Agrega esta línea para depurar
        $data = $request->all();
 
        $data['arrival_date'] = Carbon::now()->toDateString(); 
        refurbish_orders::create($data);
        

        return redirect()->route('repairs_reg.create')->with('success', 'Registro guardado correctamente.');
        

    }

    public function obtenerDatosEquipo($id)
    {
        $equipo = devices::find($id);

        if ($equipo) {
            return response()->json($equipo);
        } else {
            return response()->json(['error' => 'Equipo no encontrado.'], 404);
        }
    }

}






