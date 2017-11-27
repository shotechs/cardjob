<?php

namespace App\Http\Controllers;

use App\customer;
use DB;
use App\room;
use App\place;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

     $customers = customer::all();

//$posts = Post::orderBy('title','asc')->get(); 
return view('customer.index')->with('customers', $customers); 

       
   



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


         return view('customer/customer',compact('places', 'rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
$room = room::where('room_id', $id)->first();
 
$new_Taxes = ($room->taxes / 100) * $room->price;
$new_Taxes =  round($new_Taxes, 2);   

$new_Total = $room->price + $room->fees+ $new_Taxes;
$new_Total =  round($new_Total, 2); 

       return view('customer/customer',compact('room','new_Taxes', 'new_Total', 'id'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function submit(Request $request, $id){
$this->validate($request, [
'name' => 'required|max:255',
'email' => 'required|max:255',
'amount' => 'required|numeric',
'fees' => 'required|numeric',
'taxes' => 'required|numeric',
'creditcard' => 'required|numeric'
]);

$room = room::where('room_id', $id)->first();

$place = place::where('place_id', $room->place_id)->first();

$customer = new Customer;
$customer->full_name = $request->input('name');
$customer->email = $request->input('email');
$customer->booking = $request->input('amount');
$customer->fees = $request->input('fees');
$customer->taxes = $request->input('taxes');
$customer->credit = $request->input('creditcard');
$customer->place_name =$place->place_name;
$customer->room_name =$room->room_name;
$customer->save();

return redirect('/')->with('success', 'Request Sent');
}




}
