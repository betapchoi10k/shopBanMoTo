<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session ;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class BrandProduct extends Controller
{
    function Authlogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');

        }
        else{
            return Redirect::to('admin')->send();
        }
    }
    //
     //
     function add_brand_product(){
        $this->Authlogin();
        return view('admin.add_brand_product');
    }
    
    function all_brand_product(){
        $this->Authlogin();
        $all_brand_product =  DB::table('tbl_brand')->get();
        $manager_brand_product = view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
        return view('admin_layout')->with('admin.all_brand_product',$manager_brand_product);
    }
    function save_brand_product(Request $request){
        $this->Authlogin();
        $data  = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_decreption;
        $data['brand_status'] = $request->brand_product_status;
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        DB::table('tbl_brand')->insert($data);
        Session::put('message','Thêm thương hiệu  thành công');
        return Redirect::to('add-brand-product');
       
    }
    function unactive_brand_product($brand_product_id){
        $this->Authlogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','Không kích hoạt thương hiệu  sản phẩm');
        return Redirect::to('all-brand-product');
    }
    function active_brand_product($brand_product_id){
        $this->Authlogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','Kích hoạt thương hiệu  sản phẩm');
        return Redirect::to('all-brand-product');
    }
    function edit_brand_product($brand_product_id){
        $this->Authlogin();
        $edit_brand_product =  DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);
        return view('admin_layout')->with('admin.edit_brand_product',$manager_brand_product);
    }
    public function update_brand_product(Request $request,$brand_product_id){
        $this->Authlogin();
        $data  = array();
        
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_decreption;
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
        Session::put('message','Cập nhập thương hiệu thành công');
        return Redirect::to('all-brand-product');
    }
    public function delete_brand_product($brand_product_id){
        $this->Authlogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','Xóa thương hiệu thành công');
        return Redirect::to('all-brand-product');
    }
    
    //End function admin page
    public function show_brand_home($brand_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();
        $slide_product = DB::table('tbl_slide_home')->where('slide_status','1')->orderby('slide_id','desc')->get();
        $all_shop =DB::table('tbl_shop_info')->where('shop_status','1')->orderby('shop_id','asc')->get();

        $brand_by_id = DB::table('tbl_product')
        ->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')
        ->where('tbl_product.brand_id',$brand_id)
        ->paginate(9);
        $brand_name =  DB::table('tbl_brand')->where('brand_id',$brand_id)->limit(1)->get();
        return view('pages.brand.show_brand')
        ->with('category', $cate_product)
        ->with('brand', $brand_product)
        ->with('brand_by_id', $brand_by_id)
        ->with('all_slide',$slide_product)
        ->with('brand_name', $brand_name)
        ->with('all_shop', $all_shop);
    } 
}
