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
    
    
       public function show(string $id)
    {
        $messages =Message::findOrFail($id);
        return view('showMessage', compact('messages'));

    }
    public function show(string $id)
    {
        $messages =Message::findOrFail($id);
        return view('showMessage', compact('messages'));
    }
}

