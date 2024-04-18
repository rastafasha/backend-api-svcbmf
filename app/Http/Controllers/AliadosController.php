<?php

namespace App\Http\Controllers;

use App\Models\Aliados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Aliados\AliadosCollection;

class AliadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $aliados = Aliados::where(DB::raw("CONCAT(aliados.title,' ', IFNULL(aliados.enlace,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
                    
        return response()->json([
            "total" =>$aliados->total(),
            "aliados" => AliadosCollection::make($aliados),
            
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
        $aliado_is_valid = Aliados::where("user_id", $request->user_id)->first();

        if($aliado_is_valid){
            return response()->json([
                "message"=>403,
                "message_text"=> 'el Aliados ya existe'
            ]);
        }

        if($request->hasFile('imagen')){
            $path = Storage::putFile("aliados", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }

        $aliado = Aliados::create($request->all());

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
        $aliado = Aliados::findOrFail($id);

        return response()->json([
            "aliado" => $aliado,
            
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

        
        $aliado_is_valid = Aliados::where("id", "<>", $id)->first();
        
        $aliado = Aliados::findOrFail($id);

        if($request->hasFile('imagen')){
            if($aliado->avatar){
                Storage::delete($aliado->avatar);
            }
            $path = Storage::putFile("aliados", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }
       
        $aliado->update($request->all());
        
        // error_log($aliado);

        return response()->json([
            "message"=>200,
            "aliado"=>$aliado,
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
        $aliado = Aliados::findOrFail($id);
        if($aliado->image){
            Storage::delete($aliado->image);
        }
        $aliado->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
