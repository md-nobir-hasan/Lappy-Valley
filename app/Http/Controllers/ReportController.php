<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function saleReportDaily(){

    }

    public function saleReportWeekly(){

    }

    public function saleReportMonthly(){

    }

    public function orderReportDaily(Request $req){
        $n['data'] = Order::whereBetween('created_at',[Carbon::now()->today(),Carbon::now()->days(7)])->get();
        return view('backend.report.order.daily',$n);

    }

    public function view($view){
        return view($view);
    }


}
