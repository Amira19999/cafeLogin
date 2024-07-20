<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beverage;
class BeverageControlle extends Controller
{
    public function index()
    {
        $beverage =Beverage::get();
       return view('beverage', compact('beverage'));
    }
    public function create()
    {
        
        return view('addBeverage');

    }
     public function store(Request $request) :RedirectResponse
     {
         $new_beverage = new Category();
         $new_beverage->Title  = $request->title;
         $new_beverage->Content = $request->content;
         $new_beverage->Price = $request->price;
         $new_beverage->Image = $request->image;
         $new_beverage->Category = $request->category;
         $new_beverage->save();
       
       return redirect('category');
     }
    




    public function edit(string $id)

    {  
        $beverage = Beverage::findOrFail($id);
        return view ('editBeverage',compact ('beverage'));
    }








}
