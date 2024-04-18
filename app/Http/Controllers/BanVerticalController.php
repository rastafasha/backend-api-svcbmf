<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Banners\Banverticals;
use App\Http\Resources\Banners\Bannvertical\BanverticalCollection;

class BanVerticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $banverticals = Banverticals::where(DB::raw("CONCAT(banverticals.titulo,' ', IFNULL(banverticals.enlace,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
                    
        return response()->json([
            "total" =>$banverticals->total(),
            "banverticals" => BanverticalCollection::make($banverticals),
            
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
        $banvertical_is_valid = Banverticals::where("user_id", $request->user_id)->first();

        // if($banvertical_is_valid){
        //     return response()->json([
        //         "message"=>403,
        //         "message_text"=> 'el banvertical ya existe'
        //     ]);
        // }

        if($request->hasFile('imagen')){
            $path = Storage::putFile("banverticals", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }

        $banvertical = Banverticals::create($request->all());

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
        $banvertical = Banverticals::findOrFail($id);

        return response()->json([
            "banvertical" => $banvertical,
            
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

        
        $banvertical_is_valid = Banverticals::where("id", "<>", $id)->first();
        
        $banvertical = Banverticals::findOrFail($id);


        
        if($request->hasFile('imagen')){
            if($banvertical->avatar){
                Storage::delete($banvertical->avatar);
            }
            $path = Storage::putFile("banverticals", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }
       
        $banvertical->update($request->all());
        
        // error_log($banvertical);

        return response()->json([
            "message"=>200,
            "banvertical"=>$banvertical,
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
        $banvertical = Banverticals::findOrFail($id);
        if($banvertical->image){
            Storage::delete($banvertical->image);
        }
        $banvertical->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
