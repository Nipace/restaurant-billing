<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Session;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::find(1)->first();
        return view('pages.setting.index')->with('setting', $setting);
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
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'restaurant_name' => 'required|string',
            'restaurant_address' => 'required|string',
            'contact_number' => 'required',
            'table'=>'required'
        ]);
        $data = $request->only(['restaurant_name', 'restaurant_address', 'contact_number', 'app_name','table']);
        // //Check if new img
        if ($request->hasFile('image')) {
            //upload it
            $image = $request->image->store('setting');
            //delete
            $data['restaurant_logo'] = $image;
        } else {
            $image = 'category/default-category.png';
        }


        $setting->update($data);
        // dd($setting);
        if($request->app_name){
            Session::put('app_name',$request->app_name);
        }
        Session::put('settings_restaurant_name', $request->restaurant_name);
        Session::put('settings_restaurant_address', $request->restaurant_address);
        Session::put('settings_contact_number', $request->contact_number);
        Session::put('settings_restaurant_logo', $image);
        Session::put('settings_table',$request->table);

        toastr()->success('Settings Updated Successfully.', 'Successfully!!!');


        return redirect(route('settings.index'));
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
