<?php

namespace App\Http\Controllers;

use App\Models\Revistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Revista\RevistaCollection;

class RevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $revistas = Revistas::where(DB::raw("CONCAT(revistas.volumen,' ', IFNULL(revistas.numero,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
        // ->get();
                    
        return response()->json([
            "total" =>$revistas->total(),
            "revistas" => RevistaCollection::make($revistas),
            
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
            $path = Storage::putFile("revistas", $request->file('imagen'));
            $request->request->add(["image"=>$path]);
        }

        if($request->hasFile('imagenn')){
            $path = Storage::putFile("revistas/pdf", $request->file('imagenn'));
            $request->request->add(["archivo"=>$path]);
        }

        $revista = Revistas::create($request->all());

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
        $revista = Revistas::findOrFail($id);

        return response()->json([
            "revista" => $revista,
            
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

        
        $revista_is_valid = Revistas::where("id", "<>", $id)->first();
        
        $revista = Revistas::findOrFail($id);

        if($request->hasFile('imagen')){
            if($revista->image){
                Storage::delete($revista->image);
            }
            $path = Storage::putFile("revistas", $request->file('imagen'));
            $request->request->add(["image"=>$path]);
        }
        if($request->hasFile('imagenn')){
            if($revista->archivo){
                Storage::delete($revista->archivo);
            }
            $path = Storage::putFile("revistas/pdf", $request->file('imagenn'));
            $request->request->add(["archivo"=>$path]);
        }
       
        $revista->update($request->all());
        
        // error_log($revista);

        return response()->json([
            "message"=>200,
            "revista"=>$revista,
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
        $revista = Revistas::findOrFail($id);
        if($revista->image){
            Storage::delete($revista->image);
        }
        $revista->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
