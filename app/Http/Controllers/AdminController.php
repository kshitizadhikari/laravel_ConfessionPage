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
        $adminObj = User::find($id);
        return view('admin/adminEdit', ['data' => $adminObj]);
    }

    public function update(Request $request)
    {
        $request -> validate ([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'passwordcheck' => 'required',
        ]);

        
        $adminObj = User::find($request->id);


    }

    public function delete($id)
    {
        $tshirtObj = User::find($id);
        $tshirtObj->delete();
        return redirect('/');
    }

    
}