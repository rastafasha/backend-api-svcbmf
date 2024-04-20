<?php

namespace App\Http\Controllers;

use App\Models\Ceos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Ceo\CeoCollection;

class CeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ceos = Ceos::orderBy("id", "asc")
        ->get();
                    
        return response()->json([
            "ceos" => CeoCollection::make($ceos),
            
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
        $ceo_is_valid = Ceos::where("user_id", $request->user_id)->first();

        if($ceo_is_valid){
            return response()->json([
                "message"=>403,
                "message_text"=> 'el ceo ya existe'
            ]);
        }

        if($request->hasFile('imagen')){
            $path = Storage::putFile("directiva", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }


        $ceo = Ceos::create($request->all());

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
        $ceo = Ceos::findOrFail($id);

        return response()->json([
            "ceo" => $ceo,
            
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

        
        $ceo_is_valid = Ceos::where("id", "<>", $id)->first();
        
        $ceo = Ceos::findOrFail($id);

        if($request->hasFile('imagen')){
            if($ceo->avatar){
                Storage::delete($ceo->avatar);
            }
            $path = Storage::putFile("directiva", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }
       
        $ceo->update($request->all());
        
        // error_log($ceo);

        return response()->json([
            "message"=>200,
            "ceo"=>$ceo,
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
        $ceo = Ceos::findOrFail($id);
        if($ceo->image){
            Storage::delete($ceo->image);
        }
        $ceo->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
