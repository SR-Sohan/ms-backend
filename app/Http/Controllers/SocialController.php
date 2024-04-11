<?php

namespace App\Http\Controllers;

use App\Models\Socail;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    function page(){
        return view("admin.social");
    }

    function socialList(){

        $social = Socail::orderBy('id', 'DESC')->get();

        if($social){
            return response()->json([
                "status" => "success",
                "message" => "Social Get Successful",
                "data" => $social
            ]);
        }else{
            return response()->json([
                "status" => "failed",
                "message" => "Social Can't Get at this momments",
            ]);
        }
    }

    function socialById(Request $request,$id){
        return Socail::where("id",'=',$id)->first();
    }


    function socialCreateUpdate(Request $request){

        $socialId = $request->input("social_id");
        $social = $request->input("social");
        $link = $request->input("link");

        if($socialId){

            Socail::where("id","=",$socialId)->update([
                "social" => $social,
                "link" => $link,
            ]);
            return response()->json([
                "status" => "success",
                "message" => "Social Update Successfully",
            ]);

        }else{
            $socialCreate = Socail::create([
                "social" => $social,
                "link" => $link
            ]);

            if($socialCreate){
                return response()->json([
                    "status" => "success",
                    "message" => "Social Create Successful",
                ]);
            }else{
                return response()->json([
                    "status" => "failed",
                    "message" => "Social Create Failed",
                ]);
            }
        }
    }

    function socialDelete(Request $request){
        $id = $request->input('id');

        $socialDelete = Socail::where("id","=",$id)->delete();

        if($socialDelete){

            return response()->json([
                "status" => "success",
                "message" => "Social delete Successfully",
            ]);
            
        }else{
            return response()->json([
                "status" => "failed",
                "message" => "Social Can't delete",
            ]);
        }
    }
}
