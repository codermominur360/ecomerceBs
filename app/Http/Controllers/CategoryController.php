<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {
        $category=Category::all();
        return view('admin.category.index',['category'=>$category]);
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {

        $category= new Category();
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->status=$request->status;
        $category->save();

        return redirect('/category');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category=DB::table('categories')
            ->where('category_id',$id)
            ->first();

        return view('admin.category.edit')
            ->with('category',$category);
    }


    public function update(Request $request, Category $id)
    {

        $category_id=array();
        $category_id['category_name']=$request->category_name;
        $category_id['category_description']=$request->category_description;
        $category_id['status']=$request->status;

        DB::table('categories')
            ->where('category_id',$id)
            ->update($category_id);

        return view('admin.category.index');

    }


    public function destroy($id)
    {
        //
    }

    public function deactiveAction($id)
    {
        $category_action=DB::table('categories')
            ->where('status',$id)
            ->update(['status'=>0]);

        return redirect('/category')->with('category_action',$category_action);

    }


}
