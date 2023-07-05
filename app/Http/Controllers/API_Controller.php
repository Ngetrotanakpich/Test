<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tour_model;
use App\Models\China;
use App\Models\Switzerland;
use App\Models\Thailand;

class API_Controller extends Controller
{
    public function index(){
        $user= User::all();
        $response=[
            'user' => $user
        ];
        return response($response, 201);
    } 
    public function Sign_up(Request $r){
        $user = New User();
        $user -> email=$r->Email;
        $user ->password =$r->Password;
        $user -> name=$r->Name;
        

        $user -> save();
        $response=[
            'Signup' => 'success'
        ];
        return response($response,201);
    }

    public function Sign_in(Request $r){
        
        $user = User::where('name','=',$r->Name)->where('password','=',$r->Password)->get();
        if($user!=null)
        {
            $response=[
        
                'Signin' => 'success'   
                ];
        }
        else{
            $response=[
        
                'Signin' => 'fail'   
                ];
        }  
             
        return response($response,201);
    }

    public function index2(){
        $tour= Tour_model::all();
        $response=[
            'booking' => $tour
        ];
        return response($response, 201);
    } 

    public function Booking(Request $r){
        $tour = New Tour_model();
        $tour ->name=$r->Name;
        $tour ->email=$r->Email;
        $tour ->country=$r->Country; 
        $tour ->start=$r->Start;
        $tour ->amount=$r->People;
        $tour ->price=$r->Price;        
        $tour ->s_request=$r->Special_Request;

        $tour -> save();
        $response=[
            'Booking' => 'success'
        ];
        return response($response,201);


    }
    public function China_cmt(Request $r){
        $china = New China();
        $china ->china_name=$r->Name;
        $china ->china_email=$r->Email;
        $china ->china_website=$r->Website;
        $china ->china_message=$r->Message;

        $china -> save();
        $response=[
            'Commend' => 'success'
        ];
        return response($response,201);
    }

    public function Switzerland_cmt(Request $r){
        $switzerland = New Switzerland();
        $switzerland ->switzerland_name=$r->Name;
        $switzerland ->switzerland_email=$r->Email;
        $switzerland ->switzerland_website=$r->Website;
        $switzerland ->switzerland_message=$r->Message;

        $switzerland -> save();
        $response=[
            'Commend' => 'success'
        ];
        return response($response,201);
    }

    public function Thailand_cmt(Request $r){
        $thailand = New Thailand();
        $thailand ->thailand_name=$r->Name;
        $thailand ->thailand_email=$r->Email;
        $thailand ->thailand_website=$r->Website;
        $thailand ->thailand_message=$r->Message;

        $thailand -> save();
        $response=[
            'Commend' => 'success'
        ];
        return response($response,201);
    }
    
}
