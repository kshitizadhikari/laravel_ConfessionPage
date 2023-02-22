<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\post_like;
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
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();

        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/adminHome', ['allUser' => User::all(), 'userCount' => $userCount, 'allPosts' => Post::all(), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData]);
    }
    
    public function adminTables()
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/adminTables', ['allUser' => User::all(), 'userCount' => $userCount, 'allPosts' => Post::all(), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData]);

    }

    public function editUser($id)
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        $userObj = User::find($id);
        return view('admin/userEdit', ['data' => $userObj, 'allUser' => User::all(), 'userCount' => $userCount, 'allPosts' => Post::all(), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData]);
    }

    public function editAdmin($id)
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        $userObj = User::find($id);
        return view('admin/adminEdit', ['data' => $userObj, 'allUser' => User::all(), 'userCount' => $userCount, 'allPosts' => Post::all(), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData]);
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

        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        return view('admin/adminHome', ['allUser' => User::all(), 'allPosts' => Post::all(), 'pieChartData' => $pieChartData]);

    }

    public function deleteUser($id)
    {
        $userObj = User::find($id);
        $userObj->delete();

        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        return view('admin/adminHome', ['allUser' => User::all(),  'allPosts' => Post::all(), 'pieChartData' => $pieChartData]);
    }

    
}