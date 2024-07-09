<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cafe extends Controller
{
    public function index() {
        $title="Wave Cafe HTML Template by Tooplate";
    
            return view('index',compact('title'));
        }
    
        public function menu() {
            $title="Menu";
        
                return view('menu',compact('title'));
            }
    
    
            public function About() {
                $title="About  Us";
            
                    return view('about',compact('title'));
                }
    
                public function Items() {
                    $title="Special Items";
                
                        return view('Items',compact('title'));
                    }
            
    
    
                    public function Contact() {
                        $title="Contact";
                    
                            return view('Contact',compact('title'));
                        }
        
                        
}
