<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Apiprueba extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

public function primera(Request $request){

     
    
    return 'entro';
}
 





public function payoutsuccess(Request $request){
    $fechainicio= $request->fechanicio;
    $fechafin= $request->fechafin;
    $sql = 'SELECT merchant_name, COUNT(merchant_name) AS cantidad FROM movimientos where date(created_at)>="'.$fechainicio.'" and date(created_at)<="'.$fechafin.'" and  status = 1 AND type_transaction= 2 AND currency ="COP"  GROUP BY merchant_name';
    $products = DB::select($sql);
    return $products;
}

public function payoutedclined(Request $request){
    $fechainicio= $request->fechanicio;
    $fechafin= $request->fechafin;
    $sql = 'SELECT merchant_name, COUNT(merchant_name) AS cantidad FROM movimientos where date(created_at)>="'.$fechainicio.'" and date(created_at)<="'.$fechafin.'" and  status = 3 AND type_transaction= 2 AND currency ="COP"  GROUP BY merchant_name';
    $products = DB::select($sql);
    return $products;
}

public function payinsuccess(Request $request){
    $fechainicio= $request->fechanicio;
    $fechafin= $request->fechafin;
    $sql = 'SELECT merchant_name, COUNT(merchant_name) AS cantidad FROM movimientos where date(created_at)>="'.$fechainicio.'" and date(created_at)<="'.$fechafin.'" and  status = 1 AND type_transaction<> 2 AND currency ="COP"  GROUP BY merchant_name';
    $products = DB::select($sql);
    return $products;
}

public function paydeclined(Request $request){
    $fechainicio= $request->fechanicio;
    $fechafin= $request->fechafin;
    $sql = 'SELECT merchant_name, COUNT(merchant_name) AS cantidad FROM movimientos where date(created_at)>="'.$fechainicio.'" and date(created_at)<="'.$fechafin.'" and  status = 2 AND type_transaction<> 2 AND currency ="COP"  GROUP BY merchant_name';
    $products = DB::select($sql);
    return $products;
}



public function payinsuccessperu(Request $request){
    $fechainicio= $request->fechanicio;
    $fechafin= $request->fechafin;
    $sql = 'SELECT merchant_name, COUNT(merchant_name) AS cantidad FROM movimientos where date(created_at)>="'.$fechainicio.'" and date(created_at)<="'.$fechafin.'" and  status = 1 AND type_transaction<>2 AND currency ="SOL"  GROUP BY merchant_name';
    $products = DB::select($sql);
    return $products;
}


public function payindeclinedsperu(Request $request){
    $fechainicio= $request->fechanicio;
    $fechafin= $request->fechafin;
    $sql = 'SELECT merchant_name, COUNT(merchant_name) AS cantidad FROM movimientos where date(created_at)>="'.$fechainicio.'" and date(created_at)<="'.$fechafin.'" and  status = 3 AND type_transaction<>2 AND currency ="SOL"  GROUP BY merchant_name';
    $products = DB::select($sql);
    return $products;
}



public function payoutsuccesssperu(Request $request){
    $fechainicio= $request->fechanicio;
    $fechafin= $request->fechafin;
    $sql = 'SELECT merchant_name, COUNT(merchant_name) AS cantidad FROM movimientos where date(created_at)>="'.$fechainicio.'" and date(created_at)<="'.$fechafin.'" and  status = 1 AND type_transaction= 2 AND currency ="SOL"  GROUP BY merchant_name';
    $products = DB::select($sql);
    return $products;
}

public function payoutdeclinedperu(Request $request){
    $fechainicio= $request->fechanicio;
    $fechafin= $request->fechafin;
    $sql = 'SELECT merchant_name, COUNT(merchant_name) AS cantidad FROM movimientos where date(created_at)>="'.$fechainicio.'" and date(created_at)<="'.$fechafin.'" and  status = 3 AND type_transaction= 2 AND currency ="SOL"  GROUP BY merchant_name';
    $products = DB::select($sql);
    return $products;
}

}

