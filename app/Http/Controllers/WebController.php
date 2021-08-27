<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;

class WebController extends Controller
{

    function logout()
    {
        session()->forget(["username","name"]);
        return redirect("web/login");
    }

    function do_login(Request $req)
    {
        
        $req->validate([
            "email" => "required|email|min:10",
            "password" => "required|min:5"
        ]);


        $user = User::where("email",$req->input("email"))->firstOrFail();

        if(!empty($user))
        {
            if(Hash::check($req->input("password") , $user->password ))
            {
                session([
                    "username" => $user->email,
                    "name"     => $user->name
                ]);
                return redirect("web");
            }
            else
            {
                return redirect("web/login")->with('msg', 'User Not Found!');
            }
        }

    }
    function login()
    {



       // $pass = "admin";

        //Hashing
        /*
        $hashing_pass = Hash::make($pass);
        echo "$pass <br/> $hashing_pass";
        echo "<br/>";
        if(Hash::check($pass,$hashing_pass))
        {
            echo "Matched";
        }
        */

        /*
        //Encryption AND Decryption

        $en_pass = Crypt::encryptString($pass);
        $decrypt_pass = Crypt::decryptString($en_pass);
        echo "$en_pass <br/> $decrypt_pass <br/>";
        */


        return view("website.login");
    }
    function index()
    {
      //  echo session("username");

        return view("website.home");
    }

    function shop()
    {
        return view("website.shop");
    }

    function product_detail()
    {
        return view("website.product_detail");
    }
}
