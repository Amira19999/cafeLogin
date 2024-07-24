<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessagesController extends Controller
{
    public function index()
    {
        $messages= Message::get();
       return view('messages', compact('messages'));    
    } 
    
    
  

    
    public function store(Request $request) :RedirectResponse
    {
        $new_message = new Message();
        $new_message-> name= $request->name;
        $new_message-> email= $request->email;
        $new_message-> message= $request->message;
        $new_message->save();
       
         return redirect('showMessage');
    }

     
    
    public function show(string $id)
    {
        $messages =Message::findOrFail($id);
        return view('showMessage', compact('messages'));

    }
    


    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
        Message::where('id', $id)->delete();                
                  
        return redirect('showMessage');
    }

    public function edit(string $id)

    {  
          $Message = Message::findOrFail($id);
        return view ('showMessage',compact ('messages'));
    }
}

