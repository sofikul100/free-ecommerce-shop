<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Categorie;
class Category extends Controller
{
    public function index(Request $request){

        $perPage = $request->perPage ?:5;

        return Inertia::render('Admin/category/Category',[
            'categories'=> Categorie::query()
                           ->when($request->search,function($query,$search){
                               $query->where('category_slug','like',"%{$search}%");
                           })
                           ->paginate($perPage)
                           ->withQueryString(),
            'filters'=>$request->only(['search','perPage']),             
            'totalData'=> DB::table('categories')->count()
        ]);
    }



    public function add_category_form(){
        return Inertia::render('Admin/category/AddCategory');
    }



    public function add_category(Request $request){
         $request->validate([
            'name'=>'required|max:30'
         ]);

         $category = new Categorie();

         $category->name = $request->name;
         $category->category_slug = Str::slug($request->name);
         $category->created_at = date('d-m-Y');

         $category->save();

         return redirect()->route('admin.category.index')->with('message','Category Added Successfully');

    }



    public function edit_category_form($category_id){
        return Inertia::render('Admin/category/EditCategory',[
            'categorie'=>Categorie::find($category_id)
        ]);
    }


    public function update_category (Request $request,$id){
        $request->validate([
          'name'=>'required|max:30'
        ]);

        $category = Categorie::find($id);
        $category->name = $request->name;
        $category->category_slug = Str::slug($request->name);
        $category->updated_at = date('d-m-Y');
        $category->save();
        return redirect()->route('admin.category.index')->with('message','Category Updated');
    }





    public function delete_category ($category_id){
       $category = Categorie::find($category_id);
       $category->delete();
       return redirect()->route('admin.category.index')->with('message','Category Deleted Successfully');
    }

}
