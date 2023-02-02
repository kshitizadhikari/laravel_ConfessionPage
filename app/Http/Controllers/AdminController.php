<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin/adminHome', ['allUser' => User::all()]);
    }
    
    public function adminDashboard()
    {
        return view('admin/adminDashboard');
    }
    
    public function edit($id)
    {
        $userObj = User::find($id);
        return view('admin/userEdit', ['data' => $userObj]);
    }

    public function update(Request $request)
    {
        $request -> validate ([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'passwordcheck' => 'required',
        ]);

        $userObj = User::find($request->id);

        $userObj->name = $request->name;
        $userObj->email = $request->email;
        $userObj->password = $request->password;
        $userObj->role = $request->role;

        $userObj->save();
        return view('admin/adminHome', ['allUser' => User::all()]);

    }

    public function delete($id)
    {
        $userObj = User::find($id);
        $userObj->delete();
        return view('admin/adminHome', ['allUser' => User::all()]);
    }

    
}