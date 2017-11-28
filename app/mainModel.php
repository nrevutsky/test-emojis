<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class mainModel extends Model
{
	protected $table = 'data';
	public $timestamps = false;
	protected $fillable = ['text', 'created_at'];

	public function getNew($id)
	{
		$result=DB::table('data')->where('id','>',$id)->get();
		return $result;
	}
}
