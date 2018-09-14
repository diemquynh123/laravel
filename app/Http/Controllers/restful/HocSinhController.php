<?php

namespace App\Http\Controllers\restful;
use App\Models\Hocsinh;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HocSinhController extends Controller
{
    //
    public function index(){
        return view('restful.list');
    }
     public function create(){
    	return view('restful.add');
    }
     public function store(Request $request){
    	$hocsinh =  new Hocsinh;
        $hocsinh->hocten = $request->txtHoTen;
        $hocsinh->toan = $request->txtToan;
        $hocsinh->ly = $request->txtLy;
        $hocsinh->hoa = $request->txtHoa;
        $hocsinh->save();
    }
     public function show($id){
    	echo "đây là dòng dữ liệu thứ $id";
    }
     public function edit($id){
    	return view('restful.edit');
    }
     public function update($id){
    	
    }
}
