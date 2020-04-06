<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;


class ProductController extends Controller
{
    public function addProduct(){
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
        return view('admin.product.add-product',[
            'categories'=>$categories,
            'brands'=>$brands,
        ]);
    }
    public function saveProductInfo(Request $request){
        /*image upload without package*/
//        $imageName = $productImage->getClientoriginalName();
//        $directory = 'product-images/';
//        $productImage->move($directory,$imageName);
//        $imgUrl = $directory.$imageName;

        /*image upload with intervention package*/
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientoriginalName();
        $directory = 'product-images/';
        $imgUrl = $directory.$imageName;
        Image::make($productImage)->resize(300, 400)->save($imgUrl);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imgUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
        return redirect('/add-product')->with('message','Product Info save successfully');
    }
    public function manageProductInfo(){
        //$products = Product::all();
        $products = DB::table('products')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->join('brands', 'products.brand_id', '=', 'brands.id')
                    ->select('products.*', 'categories.category_name', 'brands.brand_name')
                    ->get();
        return view('admin.product.manage-product',['products'=>$products]);
    }
    public function viewProductInfo($id){
        //$products = Product::all();
        $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->where('products.id',$id)
            ->first();
        return view('admin.product.view-product',['product'=>$product]);
    }
    public function editProductInfo($id){
        $product = Product::find($id);
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
        return view('admin.product.edit-product', [
            'product'=>$product,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }
    public function updateProductInfo(Request $request){
       $product_image = $request->file('product_image');
       if($product_image){
           $product = Product::find($request->product_id);
            unlink($product->product_image);
           $productImage = $request->file('product_image');
           $imageName = $productImage->getClientoriginalName();
           $directory = 'product-images/';
           $imgUrl = $directory.$imageName;
           Image::make($productImage)->resize(300, 400)->save($imgUrl);


           $product->category_id = $request->category_id;
           $product->brand_id = $request->brand_id;
           $product->product_name = $request->product_name;
           $product->product_code = $request->product_code;
           $product->product_price = $request->product_price;
           $product->product_quantity = $request->product_quantity;
           $product->short_description = $request->short_description;
           $product->long_description = $request->long_description;
           $product->product_image = $imgUrl;
           $product->publication_status = $request->publication_status;
           $product->save();
       }else{
           $product = Product::find($request->product_id);
           $product->category_id = $request->category_id;
           $product->brand_id = $request->brand_id;
           $product->product_name = $request->product_name;
           $product->product_code = $request->product_code;
           $product->product_price = $request->product_price;
           $product->product_quantity = $request->product_quantity;
           $product->short_description = $request->short_description;
           $product->long_description = $request->long_description;
           $product->publication_status = $request->publication_status;
           $product->save();
       }
       //return redirect('manage-product');
        return redirect('/manage-product')->with('message','Product Info Update successfully');
    }

}
