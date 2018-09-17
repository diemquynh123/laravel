<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
use App\Http\Requests\EditProdRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Country;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{

    public function getHome(){
    	return view('admin.admin');
    }
    public function getcountry(){
        $data['countries'] = Country::all();
        return view('admin.country',$data);
    }
    public function getcmtprod($id){
        $data['product'] = Product::find($id);
        return view('admin.cmtprod',$data);
    }
     public function gettagprod($id){
        $data['products'] = Product::find($id);
        return view('admin.tagprod',$data);
    }
     public function gettagpost($id){
        $data['contents'] = Product::find($id);
        return view('admin.tagcontent',$data);
    }

    public function getcmtpost($id){
         $data['content'] = Post::find($id);
        return view('admin.cmtcontent',$data);
    }
    public function getcontent(){
        $data['contents'] = Post::all();
        return view('admin.content',$data);
    }
    public function getProduct(){  
        $this->authorize('product_list'); 
        $data['items'] = Product::all();
        return view('admin.product',$data);
        }
       
    public function addProduct(){
        $this->authorize('addproduct');
        $data['cates'] = Category::all();
    	return view('admin.addproduct',$data);
    }

    public function postaddProduct(AddProductRequest $request){
        $this->authorize('addproduct');

        DB::beginTransaction();
        try{
            	$product = new Product;
            	$product->title = $request->title;
            	$product->Categories = $request->categories;
            	$product->author = $request->author;
                $product->content = $request->content;
            	$product->status = $request->status;
            	$product->post_time = $request->date;
            	$product->save();
               DB::commit();
                $success = true;
                return redirect()->route('product');
            }
        catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()
                ->withErrors($e->getMessage());
        }
    }

     public function editProduct($id){
        $this->authorize('editproduct');
        $data['cates'] = Category::all();
        $data['prod'] = Product::find($id);
    	return view('admin.editproduct',$data);
    }
    public function posteditProduct(EditProdRequest $request){
        $this->authorize('editproduct'); 
        $prodc = Product::find($request->id);
        $prodc->title = $request->title;
        $prodc->Categories = $request->categories;
        $prodc->author = $request->author;
        $prodc->content = $request->contents;
        $prodc->post_time = $request->date;
        $prodc->status = $request->status;
        $prodc->save();
        return redirect()->route('product');
    }
    public function DeleteProd($id){
        $this->authorize('deleteprod');
            Product::destroy($id);
            return redirect()->route('product');
    }

    public function getcategory(){
        $this->authorize('category');
        $items = DB::table('categories')->get();
        return view('admin.category')->with('items',$items);
    }

    public function getaddcate(){
        $this->authorize('addcate');
        return view('admin.addcate');
    }

    public function postaddcate(AddCateRequest $request){
        $this->authorize('addcate');
        DB::table('categories')->insert([
            ['name' => $request->name],
        ]);
        return redirect()->route('category');
    }

     public function geteditcate($id){
        $this->authorize('addcate');
       $cates= DB::table('categories')
            ->where('id', $id)->first();
        return view('admin.editcate',compact('cates'));
    }

    public function posteditcate(EditCateRequest $request,$id){
        $this->authorize('addcate');
        DB::table('categories')
            ->where('id',$id)
            ->update(['name' => $request->name]);
        return redirect()->route('category');
    }

    public function deletecate($id){
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->route('category');
    }

}
