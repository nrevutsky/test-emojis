<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class mainModel extends Model
{
	protected $table = 'data';
	public $timestamps = false;
	protected $fillable = ['text', 'created_at'];

	public function getNew($timestamp)
	{
		$result=DB::table('data')->where(DB::raw('UNIX_TIMESTAMP(created_at)'),'>=',$timestamp)->get();
		return $result;
	}
}
