<?php

namespace App\Http\Controllers;

use App\Models\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Documento\DocumentosCollection;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $documentos = Documentos::where(DB::raw("CONCAT(documentos.titulo,' ', IFNULL(documentos.archivo,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
                    
        return response()->json([
            "total" =>$documentos->total(),
            "documentos" => DocumentosCollection::make($documentos),
            
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

        if($request->hasFile('imagenn')){
            $path = Storage::putFile("documentos", $request->file('imagenn'));
            $request->request->add(["archivo"=>$path]);
        }

        
        $documento = Documentos::create($request->all());

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
        $documento = Documentos::findOrFail($id);

        return response()->json([
            "documento" => $documento,
            
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

        
        $documento_is_valid = Documentos::where("id", "<>", $id)->first();
        
        $documento = Documentos::findOrFail($id);

        if($request->hasFile('imagenn')){
            if($documento->archivo){
                Storage::delete($documento->archivo);
            }
            $path = Storage::putFile("documentos", $request->file('imagenn'));
            $request->request->add(["archivo"=>$path]);
        }

       
        $documento->update($request->all());
        
        // error_log($documento);

        return response()->json([
            "message"=>200,
            "documento"=>$documento,
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
        $documento = Documentos::findOrFail($id);
        if($documento->image){
            Storage::delete($documento->image);
        }
        $documento->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
