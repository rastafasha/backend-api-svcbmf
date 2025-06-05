<?php

namespace App\Http\Controllers;

use App\Models\Formacions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Resources\Formacion\FormacionCollection;

class FormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formacions = Formacions::orderBy("id", "asc")
        ->get();
                    
        return response()->json([
            "formacions" => FormacionCollection::make($formacions),
            
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
        
       
        $request ->request->add(['slug' => Str::slug($request->title)]);
        $formacion = Formacions::create($request->all());

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
        $formacion = formacions::findOrFail($id);

        return response()->json([
            "formacion" => $formacion,
            
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

        
        $formacion_is_valid = Formacions::where("id", "<>", $id)->first();
        
        $formacion = Formacions::findOrFail($id);

        $request ->request->add(['slug' => Str::slug($request->title)]);
        $formacion->update($request->all());
        
        // error_log($formacion);

        return response()->json([
            "message"=>200,
            "formacion"=>$formacion,
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
        $formacion = formacions::findOrFail($id);
        
        $formacion->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
