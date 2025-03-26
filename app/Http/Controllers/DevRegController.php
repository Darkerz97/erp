<?php

namespace App\Http\Controllers;
use App\Models\refurbish_orders; // Asegúrate de importar el modelo Registro
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

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
       
        return view('storage.repairs_reg_view',[
            'customers'=> $customers,
            'users'=>  $users,
            'salespe'=> $salespe,
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

}






