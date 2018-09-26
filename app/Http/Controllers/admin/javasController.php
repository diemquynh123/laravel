<?php

namespace App\Http\Controllers\admin;
use App\Models\Point;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class javasController extends Controller
{
	public function getList()
	{
		$data['images'] = Image::all();
		return view('javas.list', $data);
	}
    public function getCanvas($id)
    {
		$data['images'] = Image::find($id);
		$data['data'] = Point::where('img_id' , $id)->get();

        return view('javas.canvas', $data);
    }

    public function postCanvas(Request $request)
    {
    	$posx = $request['posx'];
    	$posy = $request['posy'];
		$imgId =$request['imgId'];
    	$checkPos = Point::where(['img_id' => $imgId, 'posx' => $posx, 'posy' => $posy])->get();
    	if ($checkPos->isEmpty()) {
    		$point = new Point;
	    	$point->posx = $request['posx'];
	    	$point->posy = $request['posy'];
	    	$point->img_id = $imgId;
	    	$point->save();
		}
    }


}
