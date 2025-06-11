<?php

namespace App\Http\Controllers;
use App\Models\Actualizacion;
use Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActualizacionController extends Controller
{
    //

    public function index()
    {
        // $this->authorize('index', Directory::class);

        $actualizacions = Actualizacion::get();

        return response()->json([
            'code' => 200,
            'status' => 'List Actualizacions',
            'actualizacions' => $actualizacions,
        ], 200);
    }

    public function store(Request $request)
    {
        $is_user_exist = Directory::where('email','=',$request->email)->first();

if($is_user_exist){
            $directory = $is_user_exist->update([
                "user_id" =>1,
                "nombre" => $request->nombre,
                "surname" => $request->surname,
                "especialidad" => $request->especialidad,
                "universidad" => $request->universidad,
                "ano" => $request->ano,
                "org" => $request->org,
                "website" => $request->website,
                "email" => $request->email,
                "direccion" => $request->direccion,
                "direccion1" => $request->direccion1,
                "estado" => $request->estado,
                "ciudad" => $request->ciudad,
                "telefonos" => $request->telefonos,
                "tel1" => $request->tel1,
                "telhome" => $request->telhome,
                "telmovil" => $request->telmovil,
                "telprincipal" => $request->telprincipal,
                'facebook' => $request->facebook,
                "instagram" => $request->instagram,
                "twitter" => $request->twitter,
                'linkedin' => $request->linkedin,
            ]);
        }else{
            $directory = Directory::create([
                "user_id" =>1,
                "nombre" => $request->nombre,
                "surname" => $request->surname,
                "especialidad" => $request->especialidad,
                "universidad" => $request->universidad,
                "ano" => $request->ano,
                "org" => $request->org,
                "website" => $request->website,
                "email" => $request->email,
                "direccion" => $request->direccion,
                "direccion1" => $request->direccion1,
                "estado" => $request->estado,
                "ciudad" => $request->ciudad,
                "telefonos" => $request->telefonos,
                "tel1" => $request->tel1,
                "telhome" => $request->telhome,
                "telmovil" => $request->telmovil,
                "telprincipal" => $request->telprincipal,
                'facebook' => $request->facebook,
                "instagram" => $request->instagram,
                "twitter" => $request->twitter,
                'linkedin' => $request->linkedin,
            ]);
        }

        $actualizacion = Actualizacion::create([
            "nombre" => $request->nombre,
            "surname" => $request->surname,
            "especialidad" => $request->especialidad,
            "universidad" => $request->universidad,
            "ano" => $request->ano,
            "org" => $request->org,
            "website" => $request->website,
            "email" => $request->email,
            "direccion" => $request->direccion,
            "direccion1" => $request->direccion1,
            "estado" => $request->estado,
            "ciudad" => $request->ciudad,
            "telefonos" => $request->telefonos,
            "tel1" => $request->tel1,
            "telhome" => $request->telhome,
            "telmovil" => $request->telmovil,
            "telprincipal" => $request->telprincipal,
            'facebook' => $request->facebook,
            "instagram" => $request->instagram,
            "twitter" => $request->twitter,
            'linkedin' => $request->linkedin,
        ]);

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'actualizacion' => $actualizacion,
            'directory' => $directory,
        ], 200);
        // try {
        //     DB::beginTransaction();

        //     $validatedData = $request->all();



        // $actualizacion = new Actualizacion();
        // $actualizacion->nombre = $validatedData['nombre'];
        // $actualizacion->surname = $validatedData['surname'];
        // $actualizacion->especialidad = $validatedData['especialidad'];
        // $actualizacion->universidad = $validatedData['universidad'];
        // $actualizacion->ano = $validatedData['ano'];
        // $actualizacion->org = $validatedData['org'];
        // $actualizacion->website = $validatedData['website'];
        // $actualizacion->email = $validatedData['email'];
        // $actualizacion->direccion = $validatedData['direccion'];
        // $actualizacion->direccion1 = $validatedData['direccion1'];
        // $actualizacion->estado = $validatedData['estado'];
        // $actualizacion->ciudad = $validatedData['ciudad'];
        // $actualizacion->telefonos = $validatedData['telefonos'];
        // $actualizacion->tel1 = $validatedData['tel1'];
        // $actualizacion->telhome = $validatedData['telhome'];
        // $actualizacion->telmovil = $validatedData['telmovil'];
        // $actualizacion->telprincipal = $validatedData['telprincipal'];
        // $actualizacion->facebook = $validatedData['facebook'];
        // $actualizacion->instagram = $validatedData['instagram'];
        // $actualizacion->twitter = $validatedData['twitter'];
        // $actualizacion->linkedin = $validatedData['linkedin'];
        // $actualizacion->save();


        //     DB::commit();
        //     return response()->json([
        //         'message' => 'Actualizacion created successfully',
        //         'actualizacion' => $actualizacion,
        //     ], 201);
        // } catch (\Throwable $exception) {
        //     DB::rollBack();
        //     return response()->json([
        //         'message' => 'Error no crated' . $exception,
        //     ], 500);
        // }
    }

    public function show(Actualizacion $actualizacion)
    {

        if (!$actualizacion) {
            return response()->json([
                'message' => 'actualizacion not found.'
            ], 404);
        }

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'actualizacion' => $actualizacion,
        ], 200);
    }

    public function search(Request $request){
        return Actualizacion::search($request->buscar);
    }

}
