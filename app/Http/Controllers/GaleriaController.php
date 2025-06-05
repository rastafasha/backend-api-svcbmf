<?php

namespace App\Http\Controllers;

use App\Models\Galerias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Galeria\GaleriaCollection;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $galerias = Galerias::where(DB::raw("CONCAT(galerias.titulo,' ', IFNULL(galerias.avatar,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        // ->paginate(10);
        ->get();
                    
        return response()->json([
            // "total" =>$galerias->total(),
            "galerias" => GaleriaCollection::make($galerias),
            
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
            $path = Storage::putFile("galerias", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }

        $galeria = Galerias::create($request->all());

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
        $galeria = Galerias::findOrFail($id);

        return response()->json([
            "galeria" => $galeria,
            
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

        
        $galeria_is_valid = Galerias::where("id", "<>", $id)->first();
        
        $galeria = Galerias::findOrFail($id);

        if($request->hasFile('imagen')){
            if($galeria->avatar){
                Storage::delete($galeria->avatar);
            }
            $path = Storage::putFile("galerias", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }
       
        $galeria->update($request->all());
        
        // error_log($galeria);

        return response()->json([
            "message"=>200,
            "galeria"=>$galeria,
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
        $galeria = Galerias::findOrFail($id);
        if($galeria->image){
            Storage::delete($galeria->image);
        }
        $galeria->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
