<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Banners\Banhorizontals;
use App\Http\Resources\Banners\Bannhorizontal\BanhorizontalCollection;

class BanHorizontalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $banhorizontals = Banhorizontals::where(DB::raw("CONCAT(banhorizontals.titulo,' ', IFNULL(banhorizontals.enlace,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
                    
        return response()->json([
            "total" =>$banhorizontals->total(),
            "banhorizontals" => BanhorizontalCollection::make($banhorizontals),
            
        ]);          
    }

    public function activos()
    {

        $banhorizontals = Banhorizontals::where('is_active', 1)
                ->get();

            return response()->json([
                'code' => 200,
                'status' => 'Listar Post destacados',
                "banhorizontals" => BanhorizontalCollection::make($banhorizontals),
            ], 200);
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
            $path = Storage::putFile("banhorizontals", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }

        $banhorizontal = Banhorizontals::create($request->all());

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
        $banhorizontal = Banhorizontals::findOrFail($id);

        return response()->json([
            "banhorizontal" => $banhorizontal,
            
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

        
        $banhorizontal_is_valid = Banhorizontals::where("id", "<>", $id)->first();
        
        $banhorizontal = Banhorizontals::findOrFail($id);

        if($request->hasFile('imagen')){
            if($banhorizontal->avatar){
                Storage::delete($banhorizontal->avatar);
            }
            $path = Storage::putFile("banhorizontals", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }
       
        $banhorizontal->update($request->all());
        
        // error_log($banhorizontal);

        return response()->json([
            "message"=>200,
            "banhorizontal"=>$banhorizontal,
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
        $banhorizontal = Banhorizontals::findOrFail($id);
        if($banhorizontal->image){
            Storage::delete($banhorizontal->image);
        }
        $banhorizontal->delete();
        return response()->json([
            "message"=>200
        ]);
    }

    
}
