<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SubCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class SubCategoryController extends Controller
{
    public function index(Request $request){
               $perPage = $request->perPage ?:5;
               $subcategories = SubCategorie::query()->when($request->search,function ($query,$search){
                                $query->where('subcategory_slug','like',"%{$search}%");   
                                })->with('category')
                                ->paginate($perPage)
                                ->withQueryString();
        $filters = $request->only(['search','perPage']);                        
        $totalSubcategories = SubCategorie::count();
        return Inertia::render('Admin/subCategory/SubCategory',['subcategories'=>$subcategories,'total_subcategories'=>$totalSubcategories,'filters'=>$filters]);
    }



    public function addSubCategoryForm (){
        $categories = Categorie::all();
        return Inertia::render('Admin/subCategory/AddSubCategory',['categories'=>$categories]);
    }



    public function addSubCategory(Request $request){
        $request->validate([
            'category_id'=>'required',
            'subcategory_name'=>'required'
         ]);

         $subcategory = new SubCategorie();

         $subcategory->category_id = $request->category_id;
         $subcategory->subcategory_name = $request->subcategory_name;

         $subcategory->subcategory_slug = Str::slug($request->subcategory_name);
         $subcategory->created_at = date('d-m-Y');

         $subcategory->save();

         return redirect()->route('admin.subcategory.index')->with('message','SubCategory Added Successfully');
    }





    public function editSubcategoryForm ($subcategory_id){
        return Inertia::render('Admin/subCategory/EditSubCategory',[
            'subcategorie'=>SubCategorie::with('category')->find($subcategory_id),
            'categories'=>Categorie::all()
        ]);
    }





    public function updateSubCategory (Request $request,$subcategory_id){
            $request->validate([
              'subcategory_name'=>'required|max:30'
            ]);
    
            $subcategory = SubCategorie::find($subcategory_id);
            $subcategory->category_id = $request->category_id;
            $subcategory->subcategory_name = $request->subcategory_name;
            $subcategory->subcategory_slug = Str::slug($request->subcategory_name);
            $subcategory->updated_at = date('d-m-Y');
            $subcategory->save();
            return redirect()->route('admin.subcategory.index')->with('message','Subcategory Updated');

    }







    public function deleteSubCategory ($subcategory_id){
        $subcategorie = SubCategorie::find($subcategory_id);
        $subcategorie->delete();
        return redirect()->route('admin.subcategory.index')->with('message','SubCategory Deleted Successfully');
    }






}






