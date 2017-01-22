<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

	public function show(){
		$msgs = DB::table('messages')->get();
        return view('messages', ['msgs' => $msgs]);
	}

	public function addMessage(Request $request){
		$message = new Message(
			$request->input('body'),
			$request->input('from'),
			$request->input('mobile'),
			$request->input('received_at')
			);

		$message->_save();
		
		return redirect()->action(
		    'MessagesController@show', ['add_msg' => 'Message saved']
		); 
	}
}
