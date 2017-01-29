<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
	protected $body;
	protected $from;
	protected $mobile;
	protected $received_at;
	protected $comments;

	public function __construct($body = null, $from = null, $mobile = null, $received_at = null, $comments = null){
		date_default_timezone_set('Asia/Singapore');

		$this->body = $body;
		$this->from = $from;
		$this->mobile = $mobile;
		$this->received_at = $received_at;
		$this->comments = $comments;
	}

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

public function showAll(){

}

}
