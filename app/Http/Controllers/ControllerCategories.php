<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Beverage;
use Illuminate\Http\Request;



class ControllerCategories extends Controller
{
    public function index()
    {
        $categories=Category::get();
       return view('categories', compact('categories'));
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
        $new_category->category= $request->category;
        $new_category->save();
       
         return redirect('categories');
    }

    
    public function edit(string $id)

    {  
          $category = Category::findOrFail($id);
        return view ('editCategory',compact ('category'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
       Category ::where('id', $id)->delete();                
                  
        return redirect('categories');
    }

    
}
