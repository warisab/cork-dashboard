<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;

class SetCookieController extends Controller
{
    public function setCookie(Request $request){

        if($request->value==0){
            $response = new Response('dark_mode');
            $response->withCookie(cookie()->forever('dark_mode', '1'));
            return $response;
           
        }
        elseif($request->value == 1){
            $response = new Response('light_mode');
            $response->withCookie(cookie()->forever('dark_mode', '0'));
            return $response;
        }
        else{
            return false;
        }
       
    }



}
