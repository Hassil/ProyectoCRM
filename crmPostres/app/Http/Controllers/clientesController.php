<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Mail;

class clientesController extends Controller
{

	public function registrar(){
    	$clientes=Cliente::all();
    	return view('registrarClientes');

    }

     public function guardar(Request $datos){

    	$cliente= new Cliente();
		$cliente ->nombre=$datos->input('nombre');
		$cliente ->apellido_paterno=$datos->input('apellido_paterno');
		$cliente ->apellido_materno	=$datos->input('apellido_materno');
		$cliente ->edad=$datos->input('edad');
		$cliente ->fecha_nacimiento=$datos->input('fecha_nacimiento');
		$cliente ->correo=$datos->input('correo');
		$cliente ->color_favorito=$datos->input('color_favorito');
		$cliente ->ocupacion=$datos->input('ocupacion');
	
		$cliente ->save();

        

	Mail::send('emails', ['cliente' => $cliente] ,function($message) use ($cliente) {
        $message->from('hassilpm94@gmail.com','Postres');
        $message->to($cliente->correo,$cliente->nombre)->subject('Tenemos novedades para ti ');
	});

	


	

//return 'se ha enviado el email';


       
        return redirect('/registrarClientes');


    }
     public function consultar(){
      $clientes = Cliente::all();  

       return view('consultarClientes',compact('clientes'));

    }
	
	public function editar($id){
   $cliente=Cliente::find($id);
     return view('editarClientes', compact('cliente'));

  }

  public function actualizar($id, Request $datos){
  	$cliente=Cliente::find($id);
        $cliente ->nombre=$datos->input('nombre');
		$cliente ->apellido_paterno=$datos->input('apellido_paterno');
		$cliente ->apellido_materno	=$datos->input('apellido_materno');
		$cliente ->edad=$datos->input('edad');
		$cliente ->fecha_nacimiento=$datos->input('fecha_nacimiento');
		$cliente ->correo=$datos->input('correo');
		$cliente ->color_favorito=$datos->input('color_favorito');
		$cliente ->ocupacion=$datos->input('ocupacion');
	
		$cliente ->save();

		 return redirect('/consultarClientes');

  }

     public function eliminar($id){
   	$cliente=Cliente::find($id);
   	$cliente->delete();
 
    return redirect('consultarClientes');
   }




   








	}
