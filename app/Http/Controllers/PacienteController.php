<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Paciente\PacienteCollection;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $pacientes = Pacientes::where(DB::raw("CONCAT(pacientes.title,' ', IFNULL(pacientes.description,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
        // ->get();
                    
        return response()->json([
            "total" =>$pacientes->total(),
            "pacientes" => PacienteCollection::make($pacientes),
            
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
        $paciente_is_valid = Pacientes::where("user_id", $request->user_id)->first();

        // if($paciente_is_valid){
        //     return response()->json([
        //         "message"=>403,
        //         "message_text"=> 'el paciente ya existe'
        //     ]);
        // }

        if($request->hasFile('imagen')){
            $path = Storage::putFile("areapacientes", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }

        $request ->request->add(['slug' => Str::slug($request->title)]);
        $paciente = Pacientes::create($request->all());

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
        $paciente = Pacientes::findOrFail($id);

        return response()->json([
            "paciente" => $paciente,
            
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

        
        $paciente_is_valid = Pacientes::where("id", "<>", $id)->first();
        
        $paciente = Pacientes::findOrFail($id);

        if($request->hasFile('imagen')){
            if($paciente->avatar){
                Storage::delete($paciente->avatar);
            }
            $path = Storage::putFile("areapacientes", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }
       
        $request ->request->add(['slug' => Str::slug($request->title)]);
        $paciente->update($request->all());
        
        // error_log($paciente);

        return response()->json([
            "message"=>200,
            "paciente"=>$paciente,
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
        $paciente = Pacientes::findOrFail($id);
        if($paciente->image){
            Storage::delete($paciente->image);
        }
        $banvertical->delete();
        return response()->json([
            "message"=>200
        ]);
    }

    public function recientes()
    {
        // $this->authorize('recientes', User::class);

        $pacienterecientes = Pacientes::orderBy('created_at', 'DESC')
        ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'pacienterecientes' => $pacienterecientes
        ], 200);
    }

   

    public function destacados()
    {

        $pacientedestacados = Pacientes::where('isFeatured', $featured=true)
                ->where('is_active', $is_active= 1)
                ->get();
            return response()->json([
                'code' => 200,
                'status' => 'Listar Post destacados',
                'pacientedestacados' => $pacientedestacados,
            ], 200);
    }
}
