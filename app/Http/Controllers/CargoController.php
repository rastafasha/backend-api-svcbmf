<?php

namespace App\Http\Controllers;

use App\Models\Cargos;
use Illuminate\Http\Request;
use App\Http\Resources\Cargo\CargoCollection;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargos::orderBy("id", "asc")
        ->get();
                    
        return response()->json([
            "cargos" => CargoCollection::make($cargos),
            
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = Cargos::findOrFail($id);

        return response()->json([
            "cargo" => $cargo,
            
        ]);
    }

}
