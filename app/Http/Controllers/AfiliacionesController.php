<?php

namespace App\Http\Controllers;

use App\Models\Afiliaciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Afiliaciones\AfiliacionesCollection;

class AfiliacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $afiliaciones = Afiliaciones::where(DB::raw("CONCAT(afiliaciones.nombres,' ', IFNULL(afiliaciones.apellidos,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
                    
        return response()->json([
            "total" =>$afiliaciones->total(),
            "afiliaciones" => AfiliacionesCollection::make($afiliaciones),
            
        ]);          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('imagen')){
            $path = Storage::putFile("afiliaciones", $request->file('imagen'));
            $request->request->add(["archivo"=>$path]);
        }

        $afiliacion = Afiliaciones::create($request->all());

        return response()->json([
            "message"=>200,
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
        $afiliacion = Afiliaciones::findOrFail($id);

        return response()->json([
            "afiliacion" => $afiliacion,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        $afiliacion_is_valid = Afiliaciones::where("id", "<>", $id)->first();
        
        $afiliacion = Afiliaciones::findOrFail($id);

        if($request->hasFile('imagen')){
            if($afiliacion->archivo){
                Storage::delete($afiliacion->archivo);
            }
            $path = Storage::putFile("afiliaciones", $request->file('imagen'));
            $request->request->add(["archivo"=>$path]);
        }
       
        $afiliacion->update($request->all());
        
        // error_log($afiliacion);

        return response()->json([
            "message"=>200,
            "afiliacion"=>$afiliacion,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $afiliacion = Afiliaciones::findOrFail($id);
        if($afiliacion->avatar){
            Storage::delete($afiliacion->avatar);
        }
        $afiliacion->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
