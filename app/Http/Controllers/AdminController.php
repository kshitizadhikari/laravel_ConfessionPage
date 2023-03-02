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
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/adminHome', ['allUser' => User::paginate(10), 'userCount' => $userCount, 'allPosts' => Post::paginate(10), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData, 'barChartData' => $barChartData,'userCountry' => $userCountry] );
    }
    
    public function adminTables()
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/adminTables', ['allUser' => User::paginate(10), 'userCount' => $userCount, 'allPosts' => Post::paginate(10), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData, 'barChartData' => $barChartData,'userCountry' => $userCountry]);
    }

    public function adminCharts()
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/adminCharts', ['allUser' => User::paginate(10), 'userCount' => $userCount, 'allPosts' => Post::paginate(10), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData, 'barChartData' => $barChartData,'userCountry' => $userCountry]);
    }

    public function userForm()
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/adminUserForm', ['allUser' => User::paginate(10), 'userCount' => $userCount, 'allPosts' => Post::paginate(10), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData, 'barChartData' => $barChartData,'userCountry' => $userCountry]);

    }

    public function editUser($id)
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        $userObj = User::find($id);
        return view('admin/userEdit', ['allUser' => User::paginate(10), 'userCount' => $userCount, 'allPosts' => Post::paginate(10), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData, 'barChartData' => $barChartData,'userCountry' => $userCountry]);
    }

    public function editAdmin($id)
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        $userObj = User::find($id);
        return view('admin/adminEdit', ['allUser' => User::paginate(10), 'userCount' => $userCount, 'allPosts' => Post::paginate(10), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData, 'barChartData' => $barChartData,'userCountry' => $userCountry]);
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
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();

        return view('admin/adminHome', ['allUser' => User::paginate(10), 'userCount' => $userCount, 'allPosts' => Post::paginate(10), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData, 'barChartData' => $barChartData,'userCountry' => $userCountry]);

    }

    public function deleteUser($id)
    {
        $userObj = User::find($id);
        $userObj->delete();
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/adminHome', ['allUser' => User::paginate(10), 'userCount' => $userCount, 'allPosts' => Post::paginate(10), 'postCount' => $postCount, 'likeCount' => $likeCount,'pieChartData' => $pieChartData, 'barChartData' => $barChartData,'userCountry' => $userCountry] );
    }

    public function deletePostAdmin($id)
    {
        $data=Post::find($id);
        $images=explode('|',$data->img);
        foreach($images as $image)
        {

            if(file_exists($image)){
                unlink($image);
            }
        }
        
        $data->delete();
        return redirect()->back();
    }

}