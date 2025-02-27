<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beverage;

class BeverageController extends Controller
{
    

    public function index()
    {
        $beverages =Beverage::get();
         return view('beverages',compact('beverages'));    
         
    }

    public function create()
    {
        
        return view('addBeverage');

    }
     public function store(Request $request):RedirectResponse
     {
         $new_beverage=new Beverage();
         $new_beverage->Title  = $request->title;
         $new_beverage->Content = $request->content;
         $new_beverage->Price = $request->price;
         $new_beverage->Image = $request->image;
         $new_beverage->Category = $request->category;
         $new_beverage->save();
       
       return redirect('beverages');
     }
    

    public function edit(string $id)

    {  
        $beverages= Beverage::findOrFail($id);
        return view ('editBeverage',compact ('beverage'));
    }

    public function update(Request $request, string $id)
    {
        Beverage::where('id', $id)->update([
           
           'title'=> $request->title,
           'content' => $request->content,
           'Price' => $request->price,
           'Image' => $request->image,
           'Category' => $request->category,
          
       ]);
       return redirect('/beverages');
   }
  




    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
        Beverage::where('id', $id)->delete();                //softdelete

        return redirect('beverages');
    }




    
}
