<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mainModel;

class mainController extends Controller
{
	public function input ()
	{
		$emoji_list=['&#x1F601','&#x1F602','&#x1F603','&#x1F604','&#x1F605','&#x1F606','&#x1F609','&#x1F60A','&#x1F60B','&#x1F60C','&#x1F60D','&#x1F60F','&#x1F612','&#x1F613','&#x1F614','&#x1F616','&#x1F618','&#x1F61A','&#x1F61C','&#x1F61D','&#x1F61E','&#x1F620','&#x1F621','&#x1F622','&#x1F623','&#x1F624','&#x1F625','&#x1F628','&#x1F629','&#x1F62A','&#x1F62B','&#x1F62D','&#x1F630','&#x1F631','&#x1F632','&#x1F633','&#x1F635','&#x1F637','&#x1F638','&#x1F639','&#x1F63A','&#x1F63B','&#x1F63C','&#x1F63D','&#x1F63E','&#x1F63F','&#x1F640','&#x1F645','&#x1F646','&#x1F647','&#x1F648','&#x1F649','&#x1F64A','&#x1F64B','&#x1F64C','&#x1F64D','&#x1F64E','&#x1F64F','&#x1F680','&#x1F683','&#x1F684','&#x1F685','&#x1F687','&#x1F689','&#x1F68C','&#x1F68F','&#x1F691','&#x1F692','&#x1F693','&#x1F695','&#x1F697','&#x1F699','&#x1F69A','&#x1F6A2','&#x1F6A4','&#x1F6A5','&#x1F6A7','&#x1F6A8','&#x1F6A9','&#x1F6AA','&#x1F6AB','&#x1F6AC','&#x1F6AD','&#x1F6B2','&#x1F6B6','&#x1F6B9','&#x1F6BA','&#x1F6BB','&#x1F6BC','&#x1F6BD','&#x1F6BE','&#x1F6C0'];
		$model=new mainModel();
		$phrases=$model->orderBy('created_at','ASC')->get();
		return view('pages.input')->with(['phrases'=>$phrases,'emoji_list'=>$emoji_list]);
	}

    public function create(Request $request)
    {
    	$text=htmlspecialchars(mb_substr($request->input('text'),0,255));
    	$model=new mainModel();
    	$model->text=$text;
    	$model->save();
    	return response()->json(['status'=>'ok','text'=>$text]);
    }

	public function read(Request $request)
	{
		$model=new mainModel();
		$phrases=$model->getNew($request->input('timestamp'));
		$timestamp=time();
		$new_phrases=[];
		foreach ($phrases as $phrase)
		{
			$new_phrases[]=$phrase->text;
		}
		return response()->json(['status'=>'ok','timestamp'=>$timestamp,'phrases'=>$new_phrases]);
	}

	public function output ()
	{
		$model=new mainModel();
		$phrases=$model->orderBy('created_at','ASC')->get();
		return view('pages.output')->with(['phrases'=>$phrases,'timestamp'=>time()]);
	}

}
