<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function addCategory() {
        
             return view('addCategory');
         }

         public function addBeverage() {
        
            return view('addBeverage');
        }

        public function addUser() {
        
            return view('addUser');
        }


        public function beverages() {
        
            return view('beverages');
        }

        public function categories() {
        
            return view('categories');
        }


        public function editBeverage() {
        
            return view('editBeverage');
        }

        public function editCategory() {
        
            return view('editCategory');
        }

        public function edituser() {
        
            return view('edituser');
        }


        public function messages() {
        
            return view('messages');
        }

        public function showMessage() {
        
            return view('showMessage');
        }

        public function users() {
        
            return view('users');
        }
}

