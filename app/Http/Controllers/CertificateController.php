<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    function page(){

        return view('admin.certificate');
    }


    function certificateList(){
        $certificate = Certificate::orderBy('id', 'DESC')->get();

        if($certificate){
            return response()->json([
                "status" => "success",
                "message" => "Certificate Get Successful",
                "data" => $certificate
            ]);
        }else{
            return response()->json([
                "status" => "failed",
                "message" => "Certificate Can't Get at this momments",
            ]);
        }
    }

    function certificateById(Request $request,$id){
        return Certificate::where("id","=",$id)->first();

    }


    function certificateCreateUpdate(Request $request){

        $userID = $request->header("userID");

        $certificateId = $request->input("certificate_id");
        $filePath = $request->input('file_path');
        $title = $request->input('title');

        $image = $request->file("image");


        if($certificateId){

            if($request->hasFile("image")){

                // storage image
                $updateImageName = time()."_".$userID.'.'.$image->getClientOriginalExtension();            
                $image->storeAs('public/images/certificate/', $updateImageName);

                // Delete image
                $imagePath = 'public/images/certificate/'.$filePath;        
                Storage::delete($imagePath);

                Certificate::where("id","=",$certificateId)->update([
                    "name" => $title,
                    "thumbnail" => $updateImageName,
                ]);

                return response()->json([
                    "status" => "success",
                    "message" => "Certificate Update Successfully",
                ]);

            }else{
                Certificate::where("id","=",$certificateId)->update([
                    "name" => $title,
                ]);
                return response()->json([
                    "status" => "success",
                    "message" => "Certificate Update Successfully",
                ]);
            }



        }else{

             // Upload Image      
             $imageName = time()."_".$userID.'.'.$image->getClientOriginalExtension();            
             $image->storeAs('public/images/certificate', $imageName);
 
             $certificateCreate = Certificate::create([
                 "name" => $title,
                 "thumbnail" => $imageName,
             ]);
 
             if($certificateCreate){
                 return response()->json([
                     "status" => "success",
                     "message" => "Certificate Create Successful",
                 ]);
             }else{
                 return response()->json([
                     "status" => "failed",
                     "message" => "Certificate Create Failed",
                 ]);
             }
        }

    }


    function certificateDelete(Request $request){

        $id = $request->input("id");
        $path = $request->input("path");

        $productDelete = Certificate::where("id","=",$id)->delete();

        if($productDelete){
            $imagePath = 'public/images/certificate/'.$path;        
            Storage::delete($imagePath);
            
            return response()->json([
                "status" => "success",
                "message" => "Certificate delete Successfully",
            ]);
            
        }else{
            return response()->json([
                "status" => "failed",
                "message" => "Certificate Can't delete",
            ]);
        }

    }


}
