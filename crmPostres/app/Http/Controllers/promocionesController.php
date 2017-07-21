<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promocion;
use App\Cliente;

use DB;
use Mail;


class promocionesController extends Controller
{

 



	public function ingresar(){
    	
    	return view('registraPromociones');

    }

    
     public function guardar(Request $datos){

    	$promocion= new Promocion();
		$promocion ->nombre=$datos->input('nombre');
		$promocion ->descripcion=$datos->input('descripcion');
		$promocion ->fecha_inicio=$datos->input('fecha_inicio');
		$promocion ->fecha_fin=$datos->input('fecha_fin');
		
		$promocion ->save();

        
       
        return redirect('/registraPromociones');


    }

    public function consultar(){
      $promociones=Promocion::all();  

       return view('consultaPromociones',compact('promociones'));

    }
    public function editar($id){
   $promociones=Promocion::find($id);
     return view('editarPromociones', compact('promociones'));

  }

  public function actualizar($id, Request $datos){
  	$promocion=Promocion::find($id);

		$promocion ->nombre=$datos->input('nombre');
		$promocion ->descripcion=$datos->input('descripcion');
		$promocion ->fecha_inicio=$datos->input('fecha_inicio');
		$promocion ->fecha_fin=$datos->input('fecha_fin');
		
		$promocion ->save();

        
       
        return redirect('/registraPromociones');

  }

     public function eliminar($id){
   	$promocion=Promocion::find($id);
   	$promocion->delete();
 
    return redirect('consultaPromociones');
   }

   public function enviar(){
        $promos=Promocion::all();

      return view('promociones',compact('promos'));

    }

 




public function buscarClientes(Request $datos){
  $clientes= new Cliente();

$edad=$clientes->edad=$datos->input('edad');
$color_favorito=$clientes->color_favorito=$datos->input('color_favorito');
$ocupacion=$clientes->ocupacion=$datos->input('ocupacion');


$lista=DB::table('clientes')
->select('clientes.*')
->where('edad','>=',$edad)
->where('color_favorito', 'like', $color_favorito)
->where('ocupacion','like',$ocupacion)
->get();
     $promos=Promocion::all();     

      return view('promociones',compact('lista','promos'));


}

public function enviarPromociones(Request $datos){
      $promos=Promocion::all();
     $correos=$datos->input('id');
      
   // dd($datos->input('id'));


  for ($i=0; $i < count($correos); $i++) { 
  
  Mail::send('emailsPromociones', ['correos' => $correos[$i]] ,function($message) use ($correos,$i) {
        $message->from('hassilpm94@gmail.com','Postres');
        $message->to($correos[$i])->subject('Tenemos novedades para ti ');
  });

}
return view('promociones', compact('promos'));

   } 




}


