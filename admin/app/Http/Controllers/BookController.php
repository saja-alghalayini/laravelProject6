<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function fetchall(){
        $show = book::all();
        return view('book', compact('show'));
    }

     public function insBook(Request $request){
        $img= $request->file('img');
        $imgname=$img->getClientOriginalName();
        $img-> move(public_path('files'), $imgname);
        $img_store= $imgname;
        /*==============================================================*/
        $file= $request->file('file');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('files'), $filename);
        $file_store= $filename;
        /*==============================================================*/
        
        $new = new book;
        $new-> book_name=$request->input('name');
        $new-> book_description=$request->input('description');
        $new-> book_author=$request->input('author');
        $new-> book_image=$imgname;
        $new-> book_file=$filename;
        $new-> volunteer_id=1;

        $new->save();
        return redirect('book');
        
     }


     public function upBook(Request $request,$id)
     {
        $img= $request->file('img');
        $imgname=$img->getClientOriginalName();
        $img-> move(public_path('files'), $imgname);
        $img_store= $imgname;
        /*==============================================================*/
        $file= $request->file('file');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('files'), $filename);
        $file_store= $filename;
        /*==============================================================*/

        DB::table('book')->where('book_id', $id)
        ->update([
            'book_name'=>$request->input('name'),
            'book_name'=>$request->input('description'),
            'book_name'=>$request->input('author'),
            'book_name'=>$imgname,
            'book_name'=>$filename
        ]);

        return redirect('book');
   }

    // public function fetchspice($id){
    //     $show = DB::table('books')->where('book_id', $id)->get();
        
    //  return view('bookUpdate', compact('show'));
    // }
    public function updateInfo($id){
        // $show=DB::select('select * from books where book_id = ?', [$id]);
        // return view('bookUpdate',compact('show'));

        $show = book::all();
        return view('bookUpdate', compact('show'));
      }
    public function update_i(Request $request, $id){
        $update= Book::find($id);
        $first_name=$request->input('firstname');
        $last_name=$request->input('lastname');
        $email =$request->input('email'); 
        $phone_number=$request->input('phonenumber');
        $address=$request->input('address');
        $password=$request->input('password');
        // $update->update();
        DB::update('Update users SET first_name=?, last_name=?, email=?, phone_number=?, address=?, password=? where id=?',[
            $first_name,
            $last_name,
            $email,
            $phone_number,
            $address,
            $password,
            $id
        ]);
        return redirect('info/'.$id)->with('message','the data has been updated successfully');
    }

    public function destroy($id)
    {
        DB::table('books')->where('book_id', $id)->delete();
        // $student = book::find($id);
        // $student->delete();
        return redirect('book');
    }
}