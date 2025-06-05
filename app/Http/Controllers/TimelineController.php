<?php

namespace App\Http\Controllers;

use App\Models\Timelines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Timeline\TimelineCollection;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $timelines = Timelines::where(DB::raw("CONCAT(timelines.title,' ', IFNULL(timelines.youtube,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
        // ->get();
                    
        return response()->json([
            "total" =>$timelines->total(),
            "timelines" => TimelineCollection::make($timelines),
            
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
            $path = Storage::putFile("timelines", $request->file('imagen'));
            $request->request->add(["image"=>$path]);
        }

        $timeline = Timelines::create($request->all());

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
        $timeline = Timelines::findOrFail($id);

        return response()->json([
            "timeline" => $timeline,
            
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

        
        $timeline_is_valid = Timelines::where("id", "<>", $id)->first();
        
        $timeline = Timelines::findOrFail($id);

        if($request->hasFile('imagen')){
            if($timeline->image){
                Storage::delete($timeline->image);
            }
            $path = Storage::putFile("timelines", $request->file('imagen'));
            $request->request->add(["image"=>$path]);
        }
       
        $timeline->update($request->all());
        
        // error_log($timeline);

        return response()->json([
            "message"=>200,
            "timeline"=>$timeline,
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
        $timeline = Timelines::findOrFail($id);
        if($timeline->image){
            Storage::delete($timeline->image);
        }
        $timeline->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
