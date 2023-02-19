<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data="";
        $result = DB::table('users')
                            ->select('gender', DB::raw('COUNT(*) as count'))
                            ->groupBy('gender')
                            ->get();
        foreach($result as $val){
            $data.="['$val->gender', $val->count],";
        }
        $pieChartData = $data;
        return view('admin/adminHome', ['allUser' => User::all(), 'pieChartData' => $pieChartData], );
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