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

Route::get('/', function () {
    return view('welcome');
});

Route::get('paises',function(){   
    $Paises = [
        "Colombia"=>[
            "cap"=> "Bogota",
            "mon" => "Peso",
            "pob"=>51.6,
            "ciudades"=> [
                "Medallo",
                "Cali",
                "Barran"
                         ]                  
            ],
           "Ecuador"=>[
            "cap"=> "Quito",
            "mon" => "Dolar",
            "pob"=>20,
            "ciudades"=> [
                "Cuenca",
                "Guayaquil",                
                             ] 
            ],
            "Argentina"=>[
                "cap"=> "Buenos Aires",
                "mon" => "Peso Argentino",
                "pob"=>45.38,
                "ciudades"=> [
                    "Rosario",
                    "La PLata",   
                    "Salta",
                    "Mendoza",             
                                 ] 
                ],
                "España"=>[
                    "cap"=> "Madrid",
                    "mon" => "Euro",
                    "pob"=>3.2,
                    "ciudades"=> [
                        "Valencia",
                        "Barcelona", 
                        "Malaga", 
                        "Lisboa",
                        "Sevilla",              
                                     ] 
                ],
                "Rusia"=>[
                    "cap"=> "Moscu",
                    "mon" => "Rublo Ruso",
                    "pob"=>144,
                    "ciudades"=> [
                        "San Petersburgo",
                        "Kazan", 
                        "Novosbirsik", 
                        "Perm",
                        "Chernovil",
                        "Grozni",

                                     ] 
                ],
            ];

            return view('paises')
            ->with("paises", $Paises);
});