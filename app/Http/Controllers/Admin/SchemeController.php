<?php

namespace App\Http\Controllers\Admin;

use App\Food;
use App\Http\Controllers\Controller;
use App\Scheme;
use App\Setting;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.scheme.index')->with('schemes', Scheme::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.scheme.create')->with('foods', Food::all());
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
            'food' => 'required',
            'quantity' => 'required',
            'start_date' => 'required',
        ]);
        $scheme = Scheme::where('food_id', $request->food)->first();
        if ($scheme) {
            toastr()->error('Scheme Already exists for ' . $scheme->food->name, 'Sorry!!!');

            return redirect()->back();
        }
        if ($request->has('end_date')) {
            $end_date = $request->end_date;
        } else {
            $end_date = $request->start_date;
        }

        Scheme::create([
            'food_id' => $request->food,
            'quantity' => $request->quantity,
            'start_date' => $request->start_date,
            'end_date' => $end_date,
        ]);
        toastr()->success('Scheme Created Successfully.', 'Successfully!!!');

        return redirect(route('schemes.index'));
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
    public function edit(Scheme $scheme)
    {
        return view('pages.scheme.edit', compact('scheme'))->with('foods', Food::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scheme $scheme)
    {
        $request->validate([
            'food' => 'required',
            'quantity' => 'required',
            'start_date' => 'required',
        ]);
        if ($request->has('end_date')) {
            $end_date = $request->end_date;
        } else {
            $end_date = $request->start_date;
        }
        $scheme->quantity = $request->input(
            'quantity'
        );
        $scheme->start_date = $request->input(
            'start_date'
        );
        $scheme->end_date = $end_date;
        $scheme->save();
        toastr()->success('Scheme Updated Successfully.', 'Successfully!!!');

        return redirect(route('schemes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scheme $scheme)
    {
        $scheme->delete();

        toastr()->success('Scheme Deleted Successfully.', 'Successfully!!!');


        return redirect(route('schemes.index'));
    }
}
