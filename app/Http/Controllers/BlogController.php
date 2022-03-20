<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blogs = Blog::latest("id")->paginate(6);
        return view("blog",compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
//        $request->validate([
//            "title" => "required|unique:blogs,title|min:5",
//            "description" => "required|min:15",
//            "photo" => "required|file|mimes:jpg,png,jpeg"
//        ]);

        $path = "storage/blog/";
        $newName = "blog_".uniqid().".".$request->file("photo")->extension();
        $file = $request->file("photo");
        $img = Image::make($file);
        $img->resize(600, 400, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save($path.$newName);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->excerpt = Str::words($request->description,40);
        $blog->photo = $newName;
        $blog->user_id = Auth::id();
        $blog->save();

        return redirect()->route("blog.index")->with(["message"=>"New Blog Created Successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view("blog.detail",compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
