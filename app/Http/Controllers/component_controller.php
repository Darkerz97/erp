<?php

namespace App\Http\Controllers;

use App\Models\component;
use Illuminate\Http\Request;


class component_controller extends Controller
{
    //
    public function create()
    {
        return view('components_view');

    }
    

    public function store(Request $request)
    {
        $request-> validate([
            'description' =>'required',
            'package'    =>'required',
            'part_number'    =>'required',
            'quantity'   =>'required',
            'specs'  =>'required',

        ]);

        Component::create($request->except('_token'));
        component::create($request->all());
        return redirect('/components/create') -> with ('success', 'Componente registrado correctamente');
    }
    


    public function index()
    {
        $components = Component::all();
        //dd($components); linea para depurar 
        return view('components.index', compact('components'));
    }
}
