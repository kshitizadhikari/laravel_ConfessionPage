<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ChartController extends Controller
{
    
    public function drawPieChart(){
        $data="";
        $result = DB::table('users')
                            ->select('gender', DB::raw('COUNT(*) as count'))
                            ->groupBy('gender')
                            ->get();
        foreach($result as $val){
            $data.="['$val->gender', $val->count],";
        }
        $pieChartData = $data;
        return $pieChartData;
    }
}