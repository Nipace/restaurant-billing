<?php

namespace App\Http\Controllers\Admin;

use App\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('pages.coupon.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',


        ]);
        if ($request->has('status')) {
            $status = 1;
        } else {
            $status = 0;
        }
        // didd($request->has('status'));



        Coupon::create([
            'name' => $request->name,
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->value,
            'description' => $request->description,
            'status' => $status

        ]);
        toastr()->success('Coupon created Successfully.', 'Finally!!!');
        return redirect(route('coupons.index'));
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
    public function edit(Coupon $coupon)
    {
        return view('pages.coupon.create', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',


        ]);
        if ($request->has('status')) {
            $status = 1;
        } else {
            $status = 0;
        }



        $coupon->update([
            'name' => $request->name,
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->value,
            'description' => $request->description,
            'status' => $status

        ]);

        toastr()->success('Scheme Updated Successfully.', 'Finally!!!');


        return redirect(route('coupons.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();

        toastr()->success('Category Deleted Successfully.', 'Finally!!!');


        return redirect(route('coupons.index'));
    }
}
