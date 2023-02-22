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
    
    public function getUserCountry(){
    	$data = array();
        $result = DB::table('users')
                    ->select('country', DB::raw('COUNT(*) as count'))
                    ->groupBy('country')
                    ->get();            
        foreach($result as $val){
            $data[] = array("country" => "$val->country", "count" => $val->count);
        }
        $userCountry = array();
        $userCountry = $data;
        return $userCountry;
    }
    // array_push($data, "$val->country, $val->count");
    

}