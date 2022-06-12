<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Sales;



class SalesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    //
    public function salesByShop()
    {

        $sales = Sales::select('shop_name', DB::raw('SUM(amount) as amount'))->groupBy('shop_name')->get();


        return response()->json($sales);
    }
    public function salesByProductQty()
    {

        $sales = Sales::select('product_name', DB::raw('SUM(qty) as qty'))->groupBy('product_name')->get();


        return response()->json($sales);
    }
    public function salesByProductAmount()
    {

        $sales = Sales::select('product_name', DB::raw('SUM(amount) as amount'))->groupBy('product_name')->get();


        return response()->json($sales);
    }
    public function totalSalesAmount()
    {

        $sales = Sales::select(DB::raw('SUM(amount) as total'))->get();


        return response()->json($sales);
    }
    public function totalSalesQty()
    {

        $sales = Sales::select(DB::raw('SUM(qty) as total'))->get();


        return response()->json($sales);
    }
}
