<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.food.index')->with('foods', Food::all())->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if (!$categories) {
            toastr()->error('Please insert food categories first', 'Sorry!!!');
            return redirect()->back();
        }
        return view('pages.food.create')->with('categories', $categories);
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
            'price' => 'required|regex:/^[0-9]+/|not_in:0',
            'category' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->image->store('food');
        } else {
            $image = 'food/default-food.png';
        }



        Food::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category,
            'food_image' => $image
        ]);
        toastr()->success('Food Created Successfully.', 'Sucessfully!!!');

        return redirect(route('foods.index'));
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
    public function edit(Food $food)
    {
        return view('pages.food.edit')->with('food', $food)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);
        $data = $request->only(['name', 'price']);
        $data['category_id'] = $request->category;
        //Check if new img
        if ($request->hasFile('image')) {
            //upload it
            $image = $request->image->store('food');
            //delete
            $food->deleteImage();
            $data['food_image'] = $image;
        } else {

            $image = 'food/default-food.png';
            $data['food_image'] = $image;
        }



        $food->update($data);

        toastr()->success('Food Updated Successfully.', 'Successfully!!!');

        return redirect(route('foods.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
        toastr()->success('Food Deleted Successfully.', 'Successfully!!!');
        return redirect(route('foods.index'));
    }
}
