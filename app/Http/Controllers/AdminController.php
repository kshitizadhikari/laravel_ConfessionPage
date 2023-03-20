<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Contact;
use App\Models\post_like;
use App\Models\post_report;
use Dflydev\DotAccessData\Data;
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
        $reportCount = post_report::count();
        return view('admin/adminHome', ['admins' => User::where('role', 1)->paginate(10, ['*'], 'admins'),
                                        'users' => User::where('role', 0)->paginate(10, ['*'], 'users'), 
                                        'allPosts' => Post::paginate(10, ['*'], 'posts'),
                                        'userCount' => $userCount, 
                                        'postCount' => $postCount,
                                        'likeCount' => $likeCount,
                                        'reportCount' => $reportCount,
                                        'pieChartData' => $pieChartData, 
                                        'barChartData' => $barChartData,'userCountry' => $userCountry,
                                        'allMessages' => Contact::all(),
                                    ]); 
    }
    
    public function accountView()
    {
        $chartController = new ChartController;
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/adminAccount', ['admins' => User::where('role', 1)->paginate(10, ['*'], 'admins'),
                                            'users' => User::where('role', 0)->paginate(10, ['*'], 'users'), 
                                            'allPosts' => Post::paginate(10, ['*'], 'posts'),
                                            'userCount' => $userCount, 
                                            'postCount' => $postCount,
                                            'likeCount' => $likeCount,
                                            'pieChartData' => $pieChartData, 
                                            'barChartData' => $barChartData,'userCountry' => $userCountry]); 
        }


    public function tableAdmin()
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/tableAdmin', ['admins' => User::where('role', 1)->paginate(10, ['*'], 'admins'),
                                          'users' => User::where('role', 0)->paginate(10, ['*'], 'users'), 
                                          'allPosts' => Post::paginate(10, ['*'], 'posts'),
                                          'userCount' => $userCount, 
                                          'postCount' => $postCount,
                                          'likeCount' => $likeCount,
                                          'pieChartData' => $pieChartData, 
                                          'barChartData' => $barChartData,
                                          'userCountry' => $userCountry]);
    }

    public function tableUser()
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/tableUser', ['admins' => User::where('role', 1)->paginate(10, ['*'], 'admins'),
                                          'users' => User::where('role', 0)->paginate(10, ['*'], 'users'), 
                                          'allPosts' => Post::paginate(10, ['*'], 'posts'),
                                          'userCount' => $userCount, 
                                          'postCount' => $postCount,
                                          'likeCount' => $likeCount,
                                          'pieChartData' => $pieChartData, 
                                          'barChartData' => $barChartData,
                                          'userCountry' => $userCountry]);
    }

    public function tablePost()
    {
        $chartController = new ChartController;
        $pieChartData = $chartController->drawPieChart();
        $barChartData = $chartController->getUserCountryForBargraph();
        $userCountry = $chartController->getUserCountry();
        $userCount = User::where('role', 0)->count();
        $postCount = Post::count();
        $likeCount = post_like::count();
        return view('admin/tablePost', ['admins' => User::where('role', 1)->paginate(10, ['*'], 'admins'),
                                          'users' => User::where('role', 0)->paginate(10, ['*'], 'users'), 
                                          'allPosts' => Post::paginate(10, ['*'], 'posts'),
                                          'userCount' => $userCount, 
                                          'postCount' => $postCount,
                                          'likeCount' => $likeCount,
                                          'pieChartData' => $pieChartData, 
                                          'barChartData' => $barChartData,
                                          'userCountry' => $userCountry]);
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
        return view('admin/adminCharts', ['admins' => User::where('role', 1)->paginate(10, ['*'], 'admins'),
                                          'users' => User::where('role', 0)->paginate(10, ['*'], 'users'), 
                                          'allPosts' => Post::paginate(10, ['*'], 'posts'),
                                          'allPosts' => Post::paginate(10, ['*'], 'posts'), 
                                          'userCount' => $userCount, 
                                          'postCount' => $postCount, 
                                          'likeCount' => $likeCount,
                                          'pieChartData' => $pieChartData, 
                                          'barChartData' => $barChartData,
                                          'userCountry' => $userCountry]);
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
        return view('admin/userEdit', ['data' => $userObj,
                                       'admins' => User::where('role', 1)->paginate(10, ['*'], 'admins'),
                                       'users' => User::where('role', 0)->paginate(10, ['*'], 'users'),          
                                       'allPosts' => Post::paginate(10, ['*'], 'posts'), 
                                       'userCount' => $userCount, 
                                       'postCount' => $postCount, 
                                       'likeCount' => $likeCount,
                                       'pieChartData' => $pieChartData, 
                                       'barChartData' => $barChartData,
                                       'userCountry' => $userCountry]);
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
        return view('admin/adminEdit', ['data' => $userObj, 
                                        'admins' => User::where('role', 1)->paginate(10, ['*'], 'admins'),
                                        'users' => User::where('role', 0)->paginate(10, ['*'], 'users'),
                                        'allPosts' => Post::paginate(10, ['*'], 'posts'), 
                                        'userCount' => $userCount, 
                                        'postCount' => $postCount, 'likeCount' => $likeCount,
                                        'pieChartData' => $pieChartData, 
                                        'barChartData' => $barChartData,
                                        'userCountry' => $userCountry]);
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

       return redirect()->route('admintableUser');

    }

    public function deleteUser($id)
    {
        $userObj = User::find($id);
        $userObj->delete();
        
        return redirect()->route('admintableUser');
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