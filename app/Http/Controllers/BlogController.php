<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Blog\BlogCollection;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $blogs = Blog::where(DB::raw("CONCAT(blogs.title,' ', IFNULL(blogs.description,''))"),
        "like","%".$search."%"
        )->orderBy("id", "desc")
        ->paginate(10);
                    
        return response()->json([
            "total" =>$blogs->total(),
            "blogs" => BlogCollection::make($blogs),
            
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
        $blog_is_valid = Blog::where("user_id", $request->user_id)->first();

        if($blog_is_valid){
            return response()->json([
                "message"=>403,
                "message_text"=> 'el blog ya existe'
            ]);
        }

        if($request->hasFile('imagen')){
            $path = Storage::putFile("blogs", $request->file('imagen'));
            $request->request->add(["image"=>$path]);
        }

        $blog = Blog::create($request->all());

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
        $blog = Blog::findOrFail($id);

        return response()->json([
            "blog" => $blog,
            
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

        
        $blog_is_valid = Blog::where("id", "<>", $id)->first();
        
        $blog = Blog::findOrFail($id);

        if($request->hasFile('imagen')){
            if($blog->image){
                Storage::delete($blog->image);
            }
            $path = Storage::putFile("blogs", $request->file('imagen'));
            $request->request->add(["image"=>$path]);
        }
       
        $blog->update($request->all());
        
        // error_log($blog);

        return response()->json([
            "message"=>200,
            "blog"=>$blog,
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
        $blog = Blog::findOrFail($id);
        if($blog->image){
            Storage::delete($blog->image);
        }
        $blog->delete();
        return response()->json([
            "message"=>200
        ]);
    }
}
