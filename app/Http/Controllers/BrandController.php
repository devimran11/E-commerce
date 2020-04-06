<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use DB;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }
    public function saveBrandInfo(Request $request){
        $brand = new Brand();
        $this->validate($request,[
            'brand_name' =>'required|alpha|max:20|min:2',
            'brand_description' =>'required',
        ]);
//        $brand->brand_name = $request->brand_name;
//        $brand->brand_description = $request->brand_description;
//        $brand->publication_status = $request->publication_status;
//        $brand->save();
            DB::table('brands')->insert([
                'brand_name'=>$request->brand_name,
                'brand_description'=>$request->brand_description,
                'publication_status'=>$request->publication_status,
            ]);
        return redirect('/add-brand')->with('message', 'Brand Info save successfully');
    }
    public function manageBrandInfo(){
        $allBrands = Brand::all();
        return view('admin.brand.manage-brand',['allBrands'=>$allBrands]);
    }
}
