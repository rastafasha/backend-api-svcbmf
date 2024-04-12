<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners\Bancuadrados;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Banners\Banncuadrados\BancuadradoCollection;

class BanCuadriadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $bancuadrados = Bancuadrados::where(DB::raw("CONCAT(bancuadrados.titulo,' ', IFNULL(bancuadrados.enlace,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
                    
        return response()->json([
            "total" =>$bancuadrados->total(),
            "bancuadrados" => BancuadradoCollection::make($bancuadrados),
            
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
        $bancuadrado_is_valid = Bancuadrados::where("user_id", $request->user_id)->first();

        if($bancuadrado_is_valid){
            return response()->json([
                "message"=>403,
                "message_text"=> 'el Aliados ya existe'
            ]);
        }

        if($request->hasFile('imagen')){
            $path = Storage::putFile("bancuadrados", $request->file('imagen'));
            $request->request->add(["image"=>$path]);
        }

        $bancuadrado = Bancuadrados::create($request->all());

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
        $bancuadrado = Bancuadrados::findOrFail($id);

        return response()->json([
            "bancuadrado" => $bancuadrado,
            
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

        
        $bancuadrado_is_valid = Bancuadrados::where("id", "<>", $id)->first();
        
        $bancuadrado = Bancuadrados::findOrFail($id);

        if($request->hasFile('imagen')){
            if($bancuadrado->image){
                Storage::delete($bancuadrado->image);
            }
            $path = Storage::putFile("bancuadrados", $request->file('imagen'));
            $request->request->add(["image"=>$path]);
        }
       
        $bancuadrado->update($request->all());
        
        // error_log($bancuadrado);

        return response()->json([
            "message"=>200,
            "bancuadrado"=>$bancuadrado,
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
        $bancuadrado = Bancuadrados::findOrFail($id);
        if($bancuadrado->image){
            Storage::delete($bancuadrado->image);
        }
        $bancuadrado->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
