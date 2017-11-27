<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\place;
use App\room;
use App\search;
use DB;
class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //  $places = place::all();
       $rooms = room::all();

//$user->posts()->where('active', 1)->get();


     //  select * from room join place on place_id=place_id
 $places = place::all();

$search = \Request::get('search'); 



$places = place::where('place_name', 'like', '%'.$search.'%')->
orWhere('street1', 'like', '%'.$search.'%')->
orWhere('city', 'like', '%'.$search.'%')->
orWhere('country', 'like', '%'.$search.'%')->
get();

if($search != null){
$search1 = new Search;
$search1->search_word = $search;
$search1->save();



}


return view('card',['places' => $places, 'rooms' => $rooms]); 

Street

 $placesCount = $places->count();
 //$rooms =  $places2;


 // $rooms = DB::table('rooms')
 //            ->leftJoin('places', 'rooms.place_id', '=', 'places.place_id')
 //            ->select('*')
 //            ->get();



        //return view('card',compact('places', 'rooms'));




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
