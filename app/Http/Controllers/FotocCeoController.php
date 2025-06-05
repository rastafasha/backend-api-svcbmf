<?php

namespace App\Http\Controllers;

use App\Models\Fotoceos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Fotoceo\FotoceoCollection;

class FotocCeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $fotoceos = Fotoceos::where(DB::raw("CONCAT(fotoceos.titulo,' ', IFNULL(fotoceos.periodo,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
                    
        return response()->json([
            "total" =>$fotoceos->total(),
            "fotoceos" => FotoceoCollection::make($fotoceos),
            
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
            $path = Storage::putFile("fotoceos", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }

        $fotoceo = Fotoceos::create($request->all());

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
        $fotoceo = Fotoceos::findOrFail($id);

        return response()->json([
            "fotoceo" => $fotoceo,
            
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

        
        $fotoceo_is_valid = Fotoceos::where("id", "<>", $id)->first();
        
        $fotoceo = Fotoceos::findOrFail($id);

        if($request->hasFile('imagen')){
            if($fotoceo->avatar){
                Storage::delete($fotoceo->avatar);
            }
            $path = Storage::putFile("fotoceos", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }
       
        $fotoceo->update($request->all());
        
        // error_log($otoceo);

        return response()->json([
            "message"=>200,
            "fotoceo"=>$fotoceo,
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
        $fotoceo = Fotoceos::findOrFail($id);
        if($fotoceo->image){
            Storage::delete($fotoceo->image);
        }
        $fotoceo->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
