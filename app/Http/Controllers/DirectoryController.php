<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Directory\DirectoryCollection;
use Illuminate\Support\Facades\DB;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $speciality_id = $request->speciality_id;
        $name_doctor = $request->search;

        $directories = Directory::filterAdvance($speciality_id, $name_doctor)->orderBy("nombre", "asc")
                            // ->paginate(10);
                            -> get();
        return response()->json([
            // "total"=>$directories->total(),
            "directories"=> DirectoryCollection::make($directories)
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $directory_is_valid = Directory::where("user_id", $request->user_id)->first();

    //     if($directory_is_valid){
    //         return response()->json([
    //             "message"=>403,
    //             "message_text"=> 'el directory ya existe'
    //         ]);
    //     }

    //     if($request->hasFile('imagen')){
    //         $path = Storage::putFile("directory", $request->file('imagen'));
    //         $request->request->add(["avatar"=>$path]);
    //     }

    //     $directory = Directory::create($request->all());

    //     return response()->json([
    //         "message"=>200,
    //     ]);
    // }

     public function store(Request $request)
    {

        try {
            DB::beginTransaction();

            $validatedData = $request->all();



        $directory = new Directory();
        $directory->nombre = $validatedData['nombre'];
        $directory->surname = $validatedData['surname'];
        $directory->especialidad = $validatedData['especialidad'];
        $directory->universidad = $validatedData['universidad'];
        $directory->ano = $validatedData['ano'];
        $directory->org = $validatedData['org'];
        $directory->website = $validatedData['website'];
        $directory->email = $validatedData['email'];
        $directory->direccion = $validatedData['direccion'];
        $directory->direccion1 = $validatedData['direccion1'];
        $directory->estado = $validatedData['estado'];
        $directory->ciudad = $validatedData['ciudad'];
        $directory->telefonos = $validatedData['telefonos'];
        $directory->tel1 = $validatedData['tel1'];
        $directory->telhome = $validatedData['telhome'];
        $directory->telmovil = $validatedData['telmovil'];
        $directory->telprincipal = $validatedData['telprincipal'];
        $directory->facebook = $validatedData['facebook'];
        $directory->instagram = $validatedData['instagram'];
        $directory->twitter = $validatedData['twitter'];
        $directory->linkedin = $validatedData['linkedin'];
        $directory->save();


            DB::commit();
            return response()->json([
                'message' => 'directory created successfully',
                'directory' => $directory,
            ], 201);
        } catch (\Throwable $exception) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error no crated' . $exception,
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $directory = Directory::findOrFail($id);

        return response()->json([
            "directory" => $directory,
            
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

        
        $directory_is_valid = Directory::where("id", "<>", $id)->first();
        
        $directory = Directory::findOrFail($id);

        if($request->hasFile('imagen')){
            if($directory->avatar){
                Storage::delete($directory->avatar);
            }
            $path = Storage::putFile("directory", $request->file('imagen'));
            $request->request->add(["avatar"=>$path]);
        }
       
        $directory->update($request->all());
        
        // error_log($directory);

        return response()->json([
            "message"=>200,
            "directory"=>$directory,
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
        $directory = Directory::findOrFail($id);
        if($directory->avatar){
            Storage::delete($directory->avatar);
        }
        $directory->delete();
        return response()->json([
            "message"=>200
        ]);
    }

    public function updateEligibility(Request $request, $id)
    {
        $directory = Directory::findOrfail($id);
        $directory->status = $request->status;
        $directory->update();
        return $directory;
        
    }

    public function search(Request $request){
        return Directory::search($request->buscar);
    }
}
