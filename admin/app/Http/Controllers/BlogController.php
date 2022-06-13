<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
class BlogController extends Controller
{
    public function insBlog(Request $request){
        $newb = new blog;
        $newb-> txt_content=$request->input('content');
        $newb-> img_content=$request->input('imgContent');

        
     }
     
}
