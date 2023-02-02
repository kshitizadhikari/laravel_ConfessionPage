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
    
}