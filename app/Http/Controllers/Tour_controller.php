<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour_model;
use Illuminate\Support\Facades\DB; // include DB Class

use Illuminate\Support\Facades\Auth; // include for AUTH
use App\Providers\RouteServiceProvider;

class Tour_controller extends Controller
{


    public function add()
    {
        $tour = Tour_model::all();
        $dis = DB::select("select * from tbl_package");

        return view('booking',["v_show" => $dis]);

    }

    public function view()
    {


        //$t = Tour_model::all();

        $t = DB::table('tbl_bookingmore')
            ->leftJoin('tbl_package', 'tbl_package.id', '=', 'tbl_bookingmore.country', 'tbl_package.id', '=', 'tbl_bookingmore.price')
            ->select('tbl_bookingmore.*', 'tbl_package.country','tbl_package.price')
            ->get();
        //dd($t);

        return view('userhistory', ["v_show" => $t]);


    }
    public function getDestinations()
    {
        $country = Destination::pluck('name', 'id');
        return response()->json($country);
    }




    //Store the data
    // public function insert(Request $request)
    // {

    //     $t = new Tour_model();
    //     $t->Name = $request->name;
    //     $t->email = $request->email;
    //     $t->price = $request->price;
    //     // $t->destination = $request->destination;
    //     $t->Departure = $request->start;
    //     $t->Return = $request->end;
    //     $t->Amount_people = $request->howmany;
    //     $t->Return = $request->request;



    //     $t->save();
    //     return redirect()->route('view');
    // }
    // public function signIn(Request $r)
    // {

    //     $user = Tour_model::where(['email', '=', $r->email])    

    // }


    // public function delete($id)
    // {
    //     Tour_model::where('id', $id)->delete();
    //     return redirect()->route('view');
    // }



    // public function edit($id)
    // {
    //     $t = Tour_model::where('id', $id)->get();
    //     return view('booking', ['v_show' => $t]);
    // }

    // public function edit_value(Request $request)
    // {
    //     $t = Tour_model::find($request->id);

    //     $t->Name = $request->Name;
    //     $t->Password = $request->Password;
    //     $t->Contact_number = $request->Contact_number;
    //     $t->Email = $request->Email;
    //     $t->update();
    //     return redirect()->route('view');
    // }


    public function booking(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $start = $request->input('start');
        $price = $request->input('price');
      
        $country = $request->input('txt_country');
        $amount = $request->input('amount');
        $s_request = $request->input('s_request');

        // If s_request is null, set it to an empty string
        $s_request = $s_request ?? '';


        $t = new Tour_model();

        // Rest of your code to process the form data and perform necessary actions


        // Set the values
        $t->name = $name;
        $t->email = $email;
        $t->start = $start;
       
        $t->price = $price;
        $t->country = $country;
        $t->amount = $amount;
        $t->s_request = $s_request;

        // Save the data
        $t->save();

        // Optionally, you can redirect the user to a success page or perform any other actions

        // For example, redirect to the user history page
        return redirect('/userhistory');
    }

    public function submitForm(Request $request)
    {
        $tour = new Tour_model;
$tour->name = $request->input('name');
$tour->email = $request->input('email');
$tour->start = $request->input('start');
$tour->price = $request->input('price');
$tour->amount = $request->input('amount');

$tour->country = $request->input('country');
$s_request = $request->input('s_request'); 


$tour->save();


return redirect('/tour-booking')->with('success', 'Tour booked successfully!');
    }
}
