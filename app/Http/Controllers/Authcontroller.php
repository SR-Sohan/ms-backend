<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    function page(Request $request){

        // dd($request->header('userID'));

       
            return view('client.auth.login');
       
    
    }

    public function UserLogin(Request $request){
        $user = User::where("email","=",$request->input("email"))
                    ->select("id","first_name","password")->first();

        if (!$user || !Hash::check($request->input("password"), $user->password)) {
            return response()->json([
                "status" => "Failed",
                "message" => "Email and Password do not match"
            ]);
        }
        
        if($user !== null){

            $token = JWTToken::CreateJwt($request->input("email"),$user->id,$user->first_name);

            return response()->json([
                "status" => "Success",
                "message" => "User Login Successful",
            ])->cookie("token", $token,60*24*30);
            
        }else{
            return response()->json([
                "status" => "Failed",
                "message" => "User Unauthorized"
            ]);
        }
    }


    public function UserLogOut(){
        return redirect("/login")->cookie("token",'',-1);
    }
}
