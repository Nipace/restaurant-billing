<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
use App\Category;
use Carbon\Carbon;
use App\Stock;
use App\FoodOrder;
use App\Order;
use DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::orderBy('created_at', 'DESC')->get();
        $stocks = Stock::orderBy('from_date', 'desc')->whereDate('from_date', '>=', Carbon::today())->get();
        $todaySales = FoodOrder::orderBy('created_at', 'asc')->whereDate('created_at', '=', Carbon::today())->get();
        $today = Carbon::today();
        //Today Sales
        $dailyTransactionToday = 0;
        $totalSalesToday = 0;
        foreach ($todaySales as $sale) {
            $price = $sale->price;
            $quantity = $sale->quantity;
            $totalSalesToday = $totalSalesToday + $quantity;
            $dailyTransactionToday = $dailyTransactionToday + ($price * $quantity);
        }
        // All Sales
        $total_count = FoodOrder::all();
        $transaction_total = 0;
        $sales_total = 0;
        foreach ($total_count as $sale) {
            $price = $sale->price;
            $quantity = $sale->quantity;
            $sales_total = $sales_total + $quantity;
            $transaction_total = $transaction_total + ($price * $quantity);
        }
        //Weekly Sales
        $date = \Carbon\Carbon::today()->subDays(7);
        $weeklyData = FoodOrder::orderBy('created_at', 'asc')->whereDate('created_at', '>=', $date)->get();
        $weeklyTransaction = 0;
        $weeklySales = 0;
        foreach ($weeklyData as $sale) {
            $price = $sale->price;
            $quantity = $sale->quantity;
            $weeklySales = $weeklySales + $quantity;
            $weeklyTransaction = $weeklyTransaction + ($price * $quantity);
        }
        //Monthly Sales
        $date = \Carbon\Carbon::today()->subDays(30);
        $monthlyData = FoodOrder::orderBy('created_at', 'asc')->whereDate('created_at', '>=', $date)->get();
        $monthlyTransaction = 0;
        $monthlySales = 0;
        foreach ($monthlyData as $sale) {
            $price = $sale->price;
            $quantity = $sale->quantity;
            $monthlySales = $monthlySales + $quantity;
            $monthlyTransaction = $monthlyTransaction + ($price * $quantity);
        }

        //Popular Foods

        $food_order = DB::table('food_order')->select('food_id', DB::raw('count(*) as total'))->groupBy('food_id')->get();
        foreach ($food_order as $order) {
            $food = Food::where('id', $order->food_id)->pluck('name')->first();
            $order->food_name = $food;
        }
        $categories = Category::paginate(4);

        $orders=Order::where('user_id',Auth::id())->whereDate('created_at', '=', Carbon::today())->get();
        // dd($orders);
        $totalUserSalesToday = 0;
        $dailyUserTransactionToday = 0;


        foreach ($orders as $order){
            foreach ($order->foods as $food){
                $price=$food->pivot->price;
                $quantity=$food->pivot->quantity;
                $totalUserSalesToday = $totalUserSalesToday + $quantity;
                $dailyUserTransactionToday = $dailyUserTransactionToday + ($price * $quantity);
            }
        }
        



        return view('pages.dashboard', compact(
            'foods',
            'stocks',
            'today',
            'dailyTransactionToday',
            'totalSalesToday',
            'total_count',
            'transaction_total',
            'sales_total',
            'weeklyTransaction',
            'weeklySales',
            'monthlySales',
            'monthlyTransaction',
            'food_order',
            'categories',
            'totalUserSalesToday',
            'dailyUserTransactionToday'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
