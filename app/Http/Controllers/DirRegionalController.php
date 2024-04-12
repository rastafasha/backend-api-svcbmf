<?php

namespace App\Http\Controllers;

use App\Models\Dirregionals;
use Illuminate\Http\Request;
use App\Http\Resources\DirRegional\DirRegionalCollection;

class DirRegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dirregionals = Dirregionals::orderBy("id", "asc")
        ->get();
                    
        return response()->json([
            "dirregionals" => DirRegionalCollection::make($dirregionals),
            
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
        $dirregional_is_valid = Dirregionals::where("user_id", $request->user_id)->first();

        if($dirregional_is_valid){
            return response()->json([
                "message"=>403,
                "message_text"=> 'el dirregional ya existe'
            ]);
        }

        $dirregional = Dirregionals::create($request->all());

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
        $dirregional = Dirregionals::findOrFail($id);

        return response()->json([
            "dirregional" => $dirregional,
            
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

        
        $dirregional_is_valid = Dirregionals::where("id", "<>", $id)->first();
        
        $dirregional = Dirregionals::findOrFail($id);

        $dirregional->update($request->all());
        
        // error_log($dirregional);

        return response()->json([
            "message"=>200,
            "dirregional"=>$dirregional,
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
        $dirregional = Dirregionals::findOrFail($id);

        $dirregional->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
