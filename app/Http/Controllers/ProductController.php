<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use DB;
use Image;
use Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products=DB::table('products')
                    ->join('categories', 'products.category_id','=','categories.category_id')
                    ->join('brands','products.brand_id','=','brands.brand_id')
                    ->select('products.*','categories.category_name','brands.brand_name')
                    ->get();

        return view('admin.product.index',['products'=>$products]);
    }


    public function create()
    {
        $category=Category::where('status','active')->get();
        $select = [];
        foreach($category as $categories){
            $select[$categories->category_id] = $categories->category_name;
        }
        $brands=Brand::where('status','active')->get();
        $brand_value=[];
        foreach($brands as $brand){
            $brand_value[$brand->brand_id]=$brand->brand_name;
        }
         return view('admin.product.create',[
            'select'=>$select,
            'brand_value'=>$brand_value,
        ]);
    }

    public function imageUpload($request)
    {
        $product_image=$request->file('product_image');
        $fileType=$product_image->getClientOriginalExtension();
        $image_name=$request->product_name.'.'.$fileType;
        $directory='image_product/';
        $ulr_path=$directory.$image_name;
//        Image::make($product_image)->save($ulr_path);
        Image::make($product_image)->save($ulr_path);

         return $ulr_path;
    }
    public function store(Request $request)
    {
         $this->validate($request,[
             'product_name'=>'required|min:3',
             'product_qty'=>'required|min:1',
         ]);
         $image=$this->imageUpload($request);

        $product=new Product();
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->product_qty=$request->product_qty;
        $product->product_short_description=$request->product_short_description;
        $product->product_long_description=$request->product_long_description;
        $product->status=$request->status;
        $product->product_image=$image;
        $product->save();

        return redirect('product');

     }


    public function show($id)
    {
        //
    }



    public function edit($id)
    {
        $category=Category::where('status','active')->get();
        $select = [];
        foreach($category as $categories){
            $select[$categories->category_id] = $categories->category_name;
        }
        $brands=Brand::where('status','active')->get();
        $brand_value=[];
        foreach($brands as $brand){
            $brand_value[$brand->brand_id]=$brand->brand_name;
        }
        $product=Product::find($id);
        return view('admin.product.edit',[
           'product'=>$product,
           'select'=>$select,
           'brand_value'=>$brand_value,

        ]);
    }

    public function update(Request $request)
    {
         return $request;

    }


    public function destroy($id)
    {
        //
    }


}
