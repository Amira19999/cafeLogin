<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    private $columns = ['users'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users =User::get();
        
        return view('users', compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('addUser');
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
       $new_user = new User();
        $new_user->FullName = $request->fullname;
        $new_user->username = $request->username;
        $new_user->email = $request->email;
        $new_user->password = $request->password;
        $new_user->active = $request->active;
        $new_user->save();
    
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $users =User::findOrFail($id);
     //return view ('edituser',compact ('users'));



        $user = User::findOrFail($id);
        return view('includesADMIN.edituser', compact('user'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
     {
        User::where('id', $id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
