<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\BlogValidation;
use App\Models\Blog;
use Image; 
use File;

class BackendBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::orderBy('id','desc')->get();
        return view('backend.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogValidation $request)
    {
        // dd($request->all());

        $blog = new Blog();
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->slug = Str::slug($request->title);

        if ($request -> hasFile('image')) {
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/img/' .$img);
            Image::make($image)->save($location);
    	    $blog->image=$img;
            
        }
        $blog->save();
        return redirect()->route('admin.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        if (!is_null($blog)) {
          return view('backend.pages.blog.edit', compact('blog'));
        }else {
          return redirect()->route('admin.blog.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogValidation $request, $id)
    {

        $blog =Blog::find($id);
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->slug = Str::slug($request->title);

        if ($request -> hasFile('image')) {
            // delete the old image from folder
            if (File::exists('backend/img/'.$blog->image)) {
              file::delete('backend/img/'.$blog->image);
            }
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/img/' .$img);
            Image::make($image)->save($location);
            $blog->image=$img;
            
        }
        $blog->save();
        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $blog = Blog::find($id);
    if (!is_null($blog)) {
      // Delete blog image
      // if (File::exists('backend/img/'.$blog->image)) {
      //   File::delete('backend/img/'.$blog->image);
      // }
      $blog->delete();
    }
    return back();

    }

}
