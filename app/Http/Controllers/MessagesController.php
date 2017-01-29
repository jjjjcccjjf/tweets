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
		$message = new Message();

		$message->body =  $request->input('body');
		$message->from = $request->input('from');
		$message->mobile = $request->input('mobile');
		$message->received_at = $request->input('received_at');

		$message->_save();

		return redirect()->action(
			'MessagesController@show', ['add_msg' => 'Message saved']
		);
	}

	public function addComment(Request $request){
		$message = new Message();

		$message->id = $request->input('id');
		$message->comment = $request->input('comment');

		$message->_saveComment();

		return redirect()->action(
			'MessagesController@show', ['add_msg' => 'Comment saved']
		);
	}
}
