<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventtype;
use DB;

class EventtypeController extends Controller
{
    //
	function addevent(){
		return view('addevent');
	}
	
	function saveevent(Request $request){
		//dd($request->all());exit;
		//$user = auth()->user();
		//print_r($user);exit;
		if($request->id){
			$Eventtype = Eventtype::find($request->id);
		}else{
			$Eventtype = new Eventtype;
		}

		//$Eventtype = new Eventtype;

        $Eventtype->eventname = $request->eventname;
        $Eventtype->eventduration = $request->optradio;
        $Eventtype->userid = auth()->user()->id;

        $Eventtype->save();
		
		$request->session()->flash('msg','Event saved');
		return redirect('home');
	}
	
	function show(){
		//$eventtypes = DB::table('eventtypes')->get();
		$eventtypes = Eventtype::all();
		
		//dd($eventtypes);
		return view('home')->with(compact('eventtypes'));
	}
	
	function editevent($id, Request $request){
		$eventtypes = Eventtype::where('id',$id)->first();
		if(!$eventtypes){
			return redirect('home');
		}
		return view('updateevent')->with(compact('eventtypes'));
	}

}
	
