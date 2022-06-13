<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{
    public function displayblog(){
        $data = blog::all();
        return view('layout.blog', compact('data'));
        
    }

    // public function storeimage(Request $request){
    //     if($request->file('image')){
    //     $file= $request->file('image');
    //     $filename=$file->getClientOriginalName();
    //     $file-> move(public_path('img'), $filename);
    //     $filename;
    //     }
    //     return redirect('/blog')->with('image',$filename);

    // }
    public function addBlog(Request $request)
    {
        $blog = new blog;
        $blog->text = $request->input('blog');

        $file= $request->file('image');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('img'), $filename);
        $image=$filename;
        
        $blog->img = $image;
        $blog->user_id = 1;
        $blog->save();

        $data = blog::all();
        return redirect('/blog')->with('data',$data);

        // return redirect('/blog')->with('Blog Added Successfully') . compact('data') ;
    } 
    
   
}

