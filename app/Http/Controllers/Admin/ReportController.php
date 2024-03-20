<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Stock;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $users = \App\User::with('roles')->get();
        if (Auth::user()->hasRole('Super-Admin')) {
            $users = $users->filter(function ($user, $key) {
                return $user->hasRole(['Super-Admin', 'Admin', 'Cashier','User']);
            })->pluck('name', 'id')->toArray();
            // dd($users);

        } else {
            $users = $users->filter(function ($user, $key) {
                return $user->hasRole(['Admin', 'Cashier','User']);
            })->pluck('name', 'id')->toArray();;
        }

        return view('pages.report.index', compact('users'));
    }

    public function stocks(Request $request)
    {
        if (!$request->start_date) {
            toastr()->error('Please add the start date of stocks', 'Oops!!!');
            return back();
        }
        $start_date = $request->start_date;
        // dd($start_date);
        if ($request->end_date) {
            $end_date = $request->end_date;
        } else {
            $end_date = $request->start_date;
        }
        $stocks = Stock::whereBetween('from_date', array($start_date, $end_date))->orderBy('from_date', 'asc')->get();
        return view('pages.report.stocks', compact('stocks', 'start_date', 'end_date'));
    }

    public function orders(Request $request)
    {
        if (!$request->start_date) {
            toastr()->error('Please add the start date of orders', 'Oops!!!');
            return back();
        }
        $start_date = $request->start_date;
        // dd($start_date);
        if ($request->end_date) {
            $end_date = $request->end_date;
        } else {
            $end_date = $request->start_date;
        }
        $orders = Order::whereBetween('created_at', array($start_date . " 00:00:00", $end_date . " 23:59:59"))->orderBy('created_at', 'asc')->get();
        $grand_total = $orders->sum('grand_total');
        // dd($grand_total);
        return view('pages.report.orders', compact('orders', 'start_date', 'end_date', 'grand_total'));
    }
    public function users(Request $request)
    {
        // dd(Auth::user()->id);
        if (!$request->start_date) {
            toastr()->error('Please add the start date of orders', 'Oops!!!');
            return back();
        }
        $start_date = $request->start_date;
        // dd($start_date);
        if ($request->end_date) {
            $end_date = $request->end_date;
        } else {
            $end_date = $request->start_date;
        }
        $orders = Order::where('user_id', $request->user_id)->whereBetween('created_at', array($start_date, $end_date))->orderBy('created_at', 'asc')->get();
        $grand_total = $orders->where('status', 0)->sum('grand_total');
        $user = User::find($request->user_id)->first();
        // dd($orders);
        return view('pages.report.users', compact('orders', 'start_date', 'end_date', 'user', 'grand_total'));
    }

    public function currentUserCollection()
    {
        $orders = Order::whereDate('created_at', Carbon::today())->where('user_id', Auth::id())->orderBy('created_at','desc')->get();
        return view('pages.report.current_user', compact('orders'));
    }
    public function cancelOrder($order_id)
    {
        $order = Order::where('id', $order_id)->whereDate('created_at', Carbon::today())->where('status', 0)->first();

        if (!$order) {
            $toastr->error('Order already cancelled', 'Error!!!');
            return back();
        }
        // $foods = $order->foods;
        // dd($order->foods);
        // foreach ($foods as $food) {
        //     $stock = Stock::where('food_id', $food->id)->whereDate('from_date', Carbon::today())->first();
        //     $stock->remaining_quantity = $stock->remaining_quantity + $food->pivot->quantity + $food->pivot->scheme;
        //     $stock->save();
        // }


        $order->status = 1;
        $order->save();
        return redirect(route('report.currentUserCollection'));
    }

    public function historyCurrentUserCollection()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('pages.report.current_user_history', compact('orders'));
    }
}
