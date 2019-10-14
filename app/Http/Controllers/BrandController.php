<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        $brands=Brand::all();
        return view('admin.brand.index')->with('brands',$brands);
    }


    public function create()
    {
        return view('admin.brand.create');
    }


    public function store(Request $request)
    {
         $brands=new Brand();
         $brands->brand_name=$request->brand_name;
         $brands->brand_description=$request->brand_description;
         $brands->status=$request->status;
         $brands->save();

         return redirect('brand')->with('message','You Product Store is Database Now !');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
         $brand=Brand::find($id);
         return view('admin.brand.edit',['brand'=>$brand]);
    }


    public function update(Request $request, $id)
    {
        $brands=Brand::find($id);
        $brands->brand_name=$request->brand_name;
        $brands->brand_description=$request->brand_description;
        $brands->status=$request->status;
        $brands->save();
        return redirect('brand')->with('message','You Product is Update Now !');
    }


    public function destroy($id)
    {
        $brands=Brand::find($id);
        $brands->delete();
        return redirect('/brand')->with('message','You Product is Delete Now !');
    }

    public function deactiveAction($id)
    {
        $brands=Brand::find($id);
        $brands->status = 'deactive';
        $brands->save();
        return redirect('/brand')->with('message','You Product status is De-Active Now !');
    }

    public function activeAction($id)
    {
        $brands=Brand::find($id);
        $brands->status = 'active';
        $brands->save();
        return redirect('/brand')->with('message','You Product status is Active Now !');
    }
}
