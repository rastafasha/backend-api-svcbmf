<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Blog\BlogResource;
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
            $request->request->add(["avatar"=>$path]);
        }

        $request ->request->add(['slug' => Str::slug($request->title)]);

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
            $request->request->add(["avatar"=>$path]);
        }
        $request ->request->add(['slug' => Str::slug($request->title)]);
       
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


    public function postShowWithCategory(Post $post)
    {

        // $post = Post::with('categories')->find($id);

        $blog = Blog::join('categories', 'blogs.category_id', '=', 'categories.id')
        ->select(
            'blogs.id as id',
            'categories.name'
            )
        ->get();

        if (!$blog) {
            return response()->json([
                'message' => 'post not found.'
            ], 404);
        }

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'blog' => $blog,
        ], 200);
    }

    public function postByCategory($category)
    {
        // $this->authorize('index', User::class);

        $blogs = Blog::with('categories')->where('category_id', $category)->get();
            return response()->json([
                'code' => 200,
                'status' => 'Listar Post by Category',
                "blogs" => BlogCollection::make($blogs),
            ], 200);
    }


    public function postShowSlug($slug)
    {
        // $post = Post::where('slug', $slug)->first();

        $blog = Blog::
        // select([
        //     "id",
        //     'title',
        //     'description',
        //     'category_id',
        //     'slug',
        //     'avatar',
        //     ])
            where('slug', $slug)
            ->orderBy('id', 'desc')
            ->first();

            return response()->json([
                'code' => 200,
                'status' => 'Listar Post by slug',
                'blog' => BlogResource::make($blog),
            ], 200);
    }

    public function recientes()
    {
        // $this->authorize('recientes', User::class);

        $blogsrecientes = Blog::orderBy('created_at', 'DESC')
        ->where('is_active', 1)
        ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            // "blogsrecientes" => $blogsrecientes,
            "blogsrecientes" => BlogCollection::make($blogsrecientes),
            // "blogsrecientes"=>$blogsrecientes->map(function($blogsreciente){
            //     return[
            //         "id"=> $blogsdestacado->id,
            //         "user_id"=> $blogsdestacado->user_id,
            //         "category_id"=> $blogsdestacado->category_id,
            //         "slug"=> $blogsdestacado->slug,
            //         "title"=> $blogsreciente->title,
            //         "is_active"=> $blogsreciente->is_active,
            //         "slug"=> $blogsreciente->slug,
            //         "avatar"=> $blogsreciente->avatar ? env("APP_URL")."storage/".$blogsreciente->avatar : null,
            //         "created_at"=> $blogsreciente->created_at,
            //     ];
            // }),
        ], 200);
    }

   

    public function destacados()
    {

        $blogsdestacados = Blog::where('is_featured', 1)
                ->where('is_active', 1)
                ->get([
                    'blogs.*', 'blogs.title',
                ]);
            return response()->json([
                'code' => 200,
                'status' => 'Listar Post destacados',
                "blogsdestacados" => BlogCollection::make($blogsdestacados),
                // "blogsdestacados"=>$blogsdestacados->map(function($blogsdestacado){
                //     return[
                //         "id"=> $blogsdestacado->id,
                //         "slug"=> $blogsdestacado->slug,
                //         "user_id"=> $blogsdestacado->user_id,
                //         "category_id"=> $blogsdestacado->category_id,
                //         "title"=> $blogsdestacado->title,
                //         "is_featured"=> $blogsdestacado->is_featured,
                //         "is_active"=> $blogsdestacado->is_active,
                //         "slug"=> $blogsdestacado->slug,
                //         "description"=>  Str::limit($blogsdestacado->description, 100),
                //         "avatar"=> $blogsdestacado->avatar ? env("APP_URL")."storage/".$blogsdestacado->avatar : null,
                //         "created_at"=> $blogsdestacado->created_at,
                //     ];
                // }),
            ], 200);
    }

    public function activos()
    {

        $blogs = Blog::where('is_active', 1)
                ->get();

            return response()->json([
                'code' => 200,
                'status' => 'Listar Post destacados',
                "blogs" => BlogCollection::make($blogs),
                "blogs"=>$blogs->map(function($blog){
                    return[
                        "id"=> $blog->id,
                        "slug"=> $blog->slug,
                        "title"=> $blog->title,
                        "is_active"=> $blog->is_active,
                        "slug"=> $blog->slug,
                        "avatar"=> $blog->avatar ? env("APP_URL")."storage/".$blog->avatar : null,
                        "description"=>  Str::limit($blog->description, 100),
                        "created_at"=> $blog->created_at,
                    ];
                }),
            ], 200);
    }

    public function search(Request $request){

        return Blog::search($request->buscar);

    }
}
