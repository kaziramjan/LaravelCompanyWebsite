<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function AllCat(){
        $categories = Category::latest()->paginate(4);
        $trashCat = Category::onlyTrashed()->latest()->paginate(3);
        return view('admin.category.index', compact('categories', 'trashCat'));
    }

    public function AddCat(Request $request){
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:25',
        ],
        [
            'category_name.required' => 'Please Input Category Name',
        ]);


        Category::insert([
            'category_name' => $request->category_name,
            'user_id'       => Auth::user()->id,
            'created_at'    => Carbon::now()   

        ]);
        return Redirect()->back()->with('success', 'Category inserted Succesful.');
    }

    public function Edit($id){
        $categories = Category::find($id);
        return view('admin.category.edit', compact('categories'));
    }

    public function Update(Request $request, $id){
        $update = Category::find($id)->update([
            'category_name' => $request->category_name,
            'user_id'       => Auth::user()->id
        ]);
        return Redirect()->route('all.category')->with('success', 'Category Updated Succesful.');
    }

    public function SoftDelete($id){
        $delete = Category::find($id)->delete();
        return Redirect()->back()->with('success', 'Category Soft Delete Succefully');
    }

    public function Restore($id){
        $delete = Category::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success', 'Category Restored Succefully');
    }
    public function Pdelete($id){
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Category Deleted Succefully');
    }
}
