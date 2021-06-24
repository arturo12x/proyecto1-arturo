<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function (){
    return view('index');
});

Route::get('/fecha',function (){
    $titulo='La fecha del día de hoy es: ';
   return view('fecha',array(
       'titulo'=>$titulo
   ));
});

Route::get('calificaciones/{nom}/{calif?}',function ($nom,$calif=0){
    return view('calificaciones',array(
        'nom'=>$nom,
        'calif'=>$calif));
    })->where(array(
        'nom'=>'[a-zA-Z]+',
        'calif'=>'[0-9]'
));



Route::get('list-alu',function (){
$titulo='Calificacion Alumnos';
$alumnos=array('Frank','Fatima','Ana');

    return view('calificaciones.lista-alumnos')
        ->with('titulo',$titulo)
        ->with('alumnos',$alumnos);
});

Route::get('condicionales',function (){
    $log=false;
    return view('condicionales')->with('log',$log);
});

Route::get('pagina-generica',function (){

    $var='Laravel';
    return view('pagina-generica')->with('var',$var);
});
