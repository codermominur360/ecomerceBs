<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewShopController extends Controller
{

    public function index(){
        $category_display=Category::where('status','active') ->get();
        $newProducts=Product::where('status','active')->orderBy('product_id','DESC')->take(8)->get();

        return view('front-end.home.home',[
            'category_display'=>$category_display,
            'newProducts'=>$newProducts,
        ]);
    }


    public function categoryByContent($id)
    {
        $category_display=Category::where('status','active')
                                    ->get();
            $newProducts  =Product::where('category_id',$id)
                                   ->where('status','active')
                                   ->orderBy('product_id','DESC')
                                   ->take(8)
                                   ->get();

        return view('catbyproduct',[
            'category_display'=>$category_display,
            'newProducts'=>$newProducts,
        ]);
    }

    public function joinQuery()
    {
        $products=DB::table('products')
            ->join('categories', 'products.category_id','=','categories.category_id')
            ->join('brands','products.brand_id','=','brands.brand_id')
            ->select('products.*','categories.category_name','brands.brand_name')
            ->get();
        return $products;

    }

    public function productDetails($id)
    {
        $jointquery = $this->joinQuery();
        $singleProduct=Product::find($id);
        $category_display=Category::where('status','active')
                                    ->get();
        $newProducts  =Product::where('status','active')
                                ->where('product_id',$id)
                                ->orderBy('product_id','DESC')
                                ->take(8)
                                ->get();

        return view('productDetails',[
            'singleProduct'=>$singleProduct,
            'category_display'=>$category_display,
            'newProducts'=>$newProducts,
            'jointquery'=>$jointquery,
        ]);
    }
}
