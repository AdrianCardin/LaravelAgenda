<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = auth()->user()->personas();
        return view('dashboardPersona', compact('personas'));
        
    }
    public function add()
    {
    	return view('addPersona');
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
        //$persona->categoria_id = auth()->user()->categoria_id;
    	$persona->save();
    	return redirect('/dashboardPersona'); 
    }

    public function edit(Persona $persona)
    {

    	if (auth()->user()->id == $persona->user_id)
        {            
                return view('editPersona', compact('persona'));
        }           
        else {
             return redirect('/dashboardPersona');
         }            	
    }

    public function update(Request $request, Persona $persona)
    {
    	if(isset($_POST['delete'])) {
    		$persona->delete();
    		return redirect('/dashboardPersona');
    	}
    	else
    	{
            $this->validate($request, [
                'nombre' => 'required'
            ]);
    		$persona->nombre = $request->nombre;
            $persona->telefono = $request->telefono;
            $persona->direccion = $request->direccion;
    	    $persona->user_id = auth()->user()->id;
            //$persona->categoria_id = auth()->user()->categoria_id;
	    	$persona->save();
	    	return redirect('/dashboardPersona'); 
    	}    	
    }
    
}