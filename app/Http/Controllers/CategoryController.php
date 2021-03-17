<?php

namespace App\Http\Controllers;

use App\Http\Requests\editcaterequest;
use App\Models\Category;
use Illuminate\Http\Request;
use  DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class CategoryController extends Controller
{
    public function getcate(){
        $data['catelist']=category::all();
        return view('category.category',$data);
    }
    public function editcate($id){
        $data = category::find($id);
        return view('category.editcategory', ['cate' => $data]);
    }
    public function posteditcate(editcaterequest $request, $id){
        $category =  category::find($id);
        $category->cate_name=$request->name;
        $category->cate_code =$request->code;
        $category->save();
        return redirect()->intended('category/category/');
    }

    public function postcate(Request $request){
        $category = new category;
        // $category =$category::find($id);
        $category->cate_name=$request->name;
        $category->cate_code =$request->code;
        $category->save();
        return back();
        // return redirect()->intended('admin/category');

    }
    public function getdeletecate($id){
        category::destroy($id);
        return back();

    }
}
