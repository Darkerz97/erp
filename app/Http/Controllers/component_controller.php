<?php

namespace App\Http\Controllers;

use App\Models\component;
use Illuminate\Console\View\Components\Component as ComponentsComponent;
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
    


    public function index(Request $request)
    {

        $buscar = $request->input('buscar');
        $ordenarpor = $request ->input('ordenarPor','id');
        $ordenarpor = $request ->input('ordenarPor','description');
        $ordenarpor = $request ->input('ordenarPor','package');
        $orden =$request ->input('orden','asc');


        $components = Component::orderBy($ordenarpor,$orden)->paginate(10);
        //dd($components); linea para depurar 
        $query =Component::orderBy($ordenarpor,$orden);

        if ($buscar){
            $query -> where ('id','like','%'.$buscar.'%')
                    ->orWhere('description','like','%'.$buscar.'%')
                    ->orWhere('part_number','like','%'.$buscar.'%')
                    ->orWhere('quantity','like','%'.$buscar.'%')
                    ->orWhere('specs','like','%'.$buscar.'%')
                    ->orWhere('created_at','like','%'.$buscar.'%')
                    ->orWhere('updated_at','like','%'.$buscar.'%');
        }

        $components =$query->paginate(10);

        return view('components.index', compact('components','ordenarpor','orden','buscar'));
    }
}
