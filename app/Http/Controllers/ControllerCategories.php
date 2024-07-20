<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class ControllerCategories extends Controller
{
    public function index()
    {
        $category =Category::get();
       return view('categories', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('addCategory');

    }

    
    public function store(Request $request) :RedirectResponse
    {
        $new_category = new Category();
        $new_category->Category = $request->category;
        $new_category->save();
       
         return redirect('category');
    }

    
    public function edit(string $id)

    {  
          $category = Category::findOrFail($id);
        return view ('editCategory',compact ('category'));
    }


    
}
