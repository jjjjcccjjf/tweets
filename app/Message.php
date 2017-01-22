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

	public function __construct($body, $from, $mobile, $received_at){
		$this->body = $body;
		$this->from = $from;
		$this->mobile = $mobile;
		$this->received_at = $received_at;
	}

	public function _save(){
		date_default_timezone_set('Asia/Singapore');
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

	public function showAll(){

	}

}
