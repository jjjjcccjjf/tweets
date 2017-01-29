<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
	public $id;
	public $body;
	public $from;
	public $mobile;
	public $received_at;
	public $comment;

	public function _save(){
		DB::table('messages')->insert(
			[
				'body' => $this->body,
				'from' => $this->from,
				'mobile' => $this->mobile,
				'received_at' => $this->received_at,
				'created_at' => date("Y-m-d H:i:s"), #current timestamp
			]
		);
	}

	public function _saveComment(){

		DB::table('messages')
		->where('id', $this->id)
		->update([
			'comment' => $this->comment,
			'updated_at' => date("Y-m-d H:i:s"), #current timestamp
		]
	);

}


}
