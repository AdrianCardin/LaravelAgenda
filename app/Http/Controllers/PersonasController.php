<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = auth()->user()->personas();
        return view('dashboard', compact('personas'));
        
    }
    public function add()
    {
    	return view('add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required'
        ]);
    	$persona = new Persona();
    	$persona->nombre = $request->nombre;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;
    	$persona->user_id = auth()->user()->id;
    	$persona->save();
    	return redirect('/persona'); 
    }

    public function edit(Persona $persona)
    {

    	if (auth()->user()->id == $persona->user_id)
        {            
                return view('edit', compact('persona'));
        }           
        else {
             return redirect('/persona');
         }            	
    }

    public function update(Request $request, Persona $persona)
    {
    	if(isset($_POST['delete'])) {
    		$persona->delete();
    		return redirect('/persona');
    	}
    	else
    	{
            $this->validate($request, [
                'nombre' => 'required'
            ]);
    		$persona->nombre = $request->nombre;
	    	$persona->save();
	    	return redirect('/persona'); 
    	}    	
    }
    
}