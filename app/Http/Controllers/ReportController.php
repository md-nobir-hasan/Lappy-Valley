<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //Order Report
    public function orderReportDaily()
    {
        $n['page_name'] = 'Daily Order Report';
        $n['data'] = Order::whereBetween('created_at', [Carbon::now()->today(), Carbon::now()->today()->addDay()])->get();
        return view('backend.report.order.datewise', $n);
    }

    public function orderReportWeekly()
    {
        $n['page_name'] = 'Weekly Order Report';
        $n['data'] = Order::whereBetween('created_at', [Carbon::now()->today()->subWeek(),Carbon::now()->today()->addDay()])->get();
        return view('backend.report.order.datewise', $n);
    }

    public function orderReportMonthly()
    {
        $n['page_name'] = 'Monthly Order Report';
        $n['data'] = Order::whereBetween('created_at', [Carbon::now()->today()->subMonth(),Carbon::now()->today()->addDay()])->get();
        return view('backend.report.order.datewise', $n);
    }

    public function orderReportYearly()
    {
        $n['page_name'] = 'Yearly Order Report';
        $n['data'] = Order::whereBetween('created_at', [Carbon::now()->today()->subYear(),Carbon::now()->today()->addDay()])->get();
        return view('backend.report.order.datewise', $n);
    }

    public function orderReportDateWiseSearch()
    {
        return view('backend.report.order.search');
    }

    public function orderReportDateWise(Request $req)
    {
        $this->validate($req, [
            'from' => 'required|date',
            'to' => 'required|date',
        ]);
        $n['data'] = Order::whereBetween('created_at', [$req->from, Carbon::create($req->to)->addDay()])->get();
        $n['page_name'] = 'Date Wise Report';
        return view('backend.report.order.datewise', $n);
    }

    public function orderReportProductWise(Request $req)
    {
        $n['data'] = Product::with(['carts', 'carts.order'])->where('status','active')->get();
        $n['page_name'] = 'Product Wise Order Report';
        return view('backend.report.order.productwise', $n);
    }

    //Sale Report
    public function saleReportDaily()
    {
        $n['page_name'] = 'Daily Sale Report';
        // total sell caculation
        $sell_query = Order::whereBetween('created_at', [Carbon::now()->today(), Carbon::now()->today()->addDay()])
                    ->where('status', 'Delivered')
                    ->get();
        $n['total_sell'] = $sell_query->sum('amount');
        //total inventory cost calculation
        $inventory_cost = $sell_query->sum('inventory_cost');

        //Due amount calculation
        $due = Order::whereBetween('created_at', [Carbon::now()->today(), Carbon::now()->today()->addDay()])
                    ->where('status', 'Delivered')
                    ->where('payment_status', 'unpaid')
                    ->get();
        $n['due'] = $due->sum('amount');

        //profit/loss calculation
        if($n['total_sell'] - $inventory_cost>0){
            $n['profit'] = $n['total_sell'] - $inventory_cost;
            $n['loss'] = 0;
        }  else{
            $n['profit'] =  0;
            $n['loss'] = $inventory_cost - $n['total_sell'];
        }

        return view('backend.report.sale.datewise', $n);
    }

    public function saleReportWeekly()
    {
        $n['page_name'] = 'Weekly Sale Report';
        // $n['data'] = Order::whereBetween('created_at', [Carbon::now()->today()->subWeek(),Carbon::now()->today()->addDay()])->where('status', 'Delivered')->get();
        $sell_query = Order::whereBetween('created_at', [Carbon::now()->today()->subWeek(), Carbon::now()->today()->addDay()])
            ->where('status', 'Delivered')
            ->get();
        $n['total_sell'] = $sell_query->sum('amount');
        //total inventory cost calculation
        $inventory_cost = $sell_query->sum('inventory_cost');

        //Due amount calculation
        $due = Order::whereBetween('created_at', [Carbon::now()->today()->subWeek(), Carbon::now()->today()->addDay()])
            ->where('status', 'Delivered')
            ->where('payment_status', 'unpaid')
            ->get();
        $n['due'] = $due->sum('amount');

        //profit/loss calculation
        if ($n['total_sell'] - $inventory_cost > 0) {
            $n['profit'] = $n['total_sell'] - $inventory_cost;
            $n['loss'] = 0;
        } else {
            $n['profit'] =  0;
            $n['loss'] = $inventory_cost - $n['total_sell'];
        }

        return view('backend.report.sale.datewise', $n);
    }

    public function saleReportMonthly()
    {
        $n['page_name'] = 'Monthly Sale Report';
        // $n['data'] = Order::whereBetween('created_at', [Carbon::now()->today()->subMonth(),Carbon::now()->today()->addDay()])->where('status', 'Delivered')->get();
        $sell_query = Order::whereBetween('created_at', [Carbon::now()->today()->subMonth(), Carbon::now()->today()->addDay()])
            ->where('status', 'Delivered')
            ->get();
        $n['total_sell'] = $sell_query->sum('amount');
        //total inventory cost calculation
        $inventory_cost = $sell_query->sum('inventory_cost');
        //Due amount calculation
        $due = Order::whereBetween('created_at', [Carbon::now()->today()->subMonth(), Carbon::now()->today()->addDay()])
            ->where('status', 'Delivered')
            ->where('payment_status', 'unpaid')
            ->get();
        $n['due'] = $due->sum('amount');

        //profit/loss calculation
        if ($n['total_sell'] - $inventory_cost > 0) {
            $n['profit'] = $n['total_sell'] - $inventory_cost;
            $n['loss'] = 0;
        } else {
            $n['profit'] =  0;
            $n['loss'] = $inventory_cost - $n['total_sell'];
        }
        return view('backend.report.sale.datewise', $n);
    }

    public function saleReportYearly()
    {
        $n['page_name'] = 'Yearly Sale Report';
        // $n['data'] = Order::whereBetween('created_at', [Carbon::now()->today()->subYear(),Carbon::now()->today()->addDay()])->where('status', 'Delivered')->get();
        $sell_query = Order::whereBetween('created_at', [Carbon::now()->today()->subYear(), Carbon::now()->today()->addDay()])
            ->where('status', 'Delivered')
            ->get();
        $n['total_sell'] = $sell_query->sum('amount');
        //total inventory cost calculation
        $inventory_cost = $sell_query->sum('inventory_cost');

        //Due amount calculation
        $due = Order::whereBetween('created_at', [Carbon::now()->today()->subYear(), Carbon::now()->today()->addDay()])
            ->where('status', 'Delivered')
            ->where('payment_status', 'unpaid')
            ->get();
        $n['due'] = $due->sum('amount');

        //profit/loss calculation
        if ($n['total_sell'] - $inventory_cost > 0) {
            $n['profit'] = $n['total_sell'] - $inventory_cost;
            $n['loss'] = 0;
        } else {
            $n['profit'] =  0;
            $n['loss'] = $inventory_cost - $n['total_sell'];
        }
        return view('backend.report.sale.datewise', $n);
    }


    public function saleReportDateWiseSearch()
    {
        return view('backend.report.sale.search');
    }


    public function saleReportDateWise(Request $req)
    {
        $this->validate($req, [
            'from' => 'required|date',
            'to' => 'required|date',
        ]);
        $sell_query = Order::whereBetween('created_at', [$req->from, Carbon::create($req->to)->addDay()])
            ->where('status', 'Delivered')
            ->get();
        $n['total_sell'] = $sell_query->sum('amount');
        //total inventory cost calculation
        $inventory_cost = $sell_query->sum('inventory_cost');

        //Due amount calculation
        $due = Order::whereBetween('created_at', [$req->from, Carbon::create($req->to)->addDay()])
            ->where('status', 'Delivered')
            ->where('payment_status', 'unpaid')
            ->get();
        $n['due'] = $due->sum('amount');

        //profit/loss calculation
        if ($n['total_sell'] - $inventory_cost > 0) {
            $n['profit'] = $n['total_sell'] - $inventory_cost;
            $n['loss'] = 0;
        } else {
            $n['profit'] =  0;
            $n['loss'] = $inventory_cost - $n['total_sell'];
        }
        $n['page_name'] = 'Date Wise Report';
        return view('backend.report.sale.datewise', $n);
    }

    public function overall(Request $req)
    {
        $n['page_name'] = 'Overall Sale Report';
        $sell_query = Order::where('status', 'Delivered')->get();

        //total sell
        $n['total_sell'] = $sell_query->sum('amount');

        //total inventory cost calculation
        $inventory_cost = $sell_query->sum('inventory_cost');

        //Due amount calculation
        $due = Order::where('status', 'Delivered')
                    ->where('payment_status', 'unpaid')
                    ->get();
        $n['due'] = $due->sum('amount');

        //profit/loss calculation
        if ($n['total_sell'] - $inventory_cost > 0) {
            $n['profit'] = $n['total_sell'] - $inventory_cost;
            $n['loss'] = 0;
        } else {
            $n['profit'] =  0;
            $n['loss'] = $inventory_cost - $n['total_sell'];
        }
        return view('backend.report.sale.datewise', $n);
    }
}
