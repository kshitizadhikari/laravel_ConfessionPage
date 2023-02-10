<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TherapistController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('therapist/therapistHome');
    }
    
    public function therapistApprovalFormView()
    {
        return view('therapist/therapistApprovalForm');
    }
}