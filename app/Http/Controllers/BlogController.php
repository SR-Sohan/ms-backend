<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function page(){
        return view('admin.blog');
    }

    function blogList(){
        $blog = Blog::orderBy('id', 'DESC')->get();

        if($blog){
            return response()->json([
                "status" => "success",
                "message" => "Blog Get Successful",
                "data" => $blog
            ]);
        }else{
            return response()->json([
                "status" => "failed",
                "message" => "Blog Can't Get at this momments",
            ]);
        }
    }

    function blogCreateUpdate(Request $request){
        $userID = $request->header("userID");

        $blogId = $request->input("blog_id");
        $filePath = $request->input('file_path');
        $title = $request->input('title');
        $description = $request->input('description');

        $image = $request->file("image");


        if($blogId){

            if($request->hasFile("image")){

                // storage image
                $updateImageName = time()."_".$userID.'.'.$image->getClientOriginalExtension();            
                $image->storeAs('public/images/blog/', $updateImageName);

                // Delete image
                $imagePath = 'public/images/blog/'.$filePath;        
                Storage::delete($imagePath);

                Blog::where("id","=",$blogId)->update([
                    "title" => $title,
                    "thumbnail" => $updateImageName,
                    "description" => $description,
                ]);

                return response()->json([
                    "status" => "success",
                    "message" => "Blog Update Successfully",
                ]);

            }else{
                Blog::where("id","=",$blogId)->update([
                    "title" => $title,
                    "description" => $description,
                ]);
                return response()->json([
                    "status" => "success",
                    "message" => "Blog Update Successfully",
                ]);
            }



        }else{

             // Upload Image      
             $imageName = time()."_".$userID.'.'.$image->getClientOriginalExtension();            
             $image->storeAs('public/images/blog', $imageName);
 
             $blogCreate = Blog::create([
                 "title" => $title,
                 "thumbnail" => $imageName,
                 "description" => $description,
             ]);
 
             if($blogCreate){
                 return response()->json([
                     "status" => "success",
                     "message" => "Blog Create Successful",
                 ]);
             }else{
                 return response()->json([
                     "status" => "failed",
                     "message" => "Blog Create Failed",
                 ]);
             }
        }
    }


    function blogDelete(Request $request){
        $userID = $request->header("userID");
        $id = $request->input("id");
        $path = $request->input("path");

        $productDelete = Blog::where("id","=",$id)->delete();

        if($productDelete){
            $imagePath = 'public/images/blog/'.$path;        
            Storage::delete($imagePath);
            
            return response()->json([
                "status" => "success",
                "message" => "Blog delete Successfully",
            ]);
            
        }else{
            return response()->json([
                "status" => "failed",
                "message" => "Blog Can't delete",
            ]);
        }
    }

    function blogById(Request $request,$id){       
        return Blog::where("id","=",$id)->first();
    }
}
