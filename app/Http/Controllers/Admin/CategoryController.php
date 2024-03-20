<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // https://doc-04-6o-docs.googleusercontent.com/docs/securesc/0lnpimq0e0ngr4444uvgk7o7mq2ps5c0/ibc63ttj7d3aj72grepe3oo7ot8j7oq5/1607322900000/12507546150029939768/02810936856288739991/1sj5OsmQu3GnTOzovgNbYGEKgAWTNZYZX?e=download&authuser=0&nonce=j014lscs3o9am&user=02810936856288739991&hash=79g3kt6fr8mev3ue8p8a0ni81qgremfl

    public function index()
    {
        return view('pages.category.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.category.create');
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
            'name' => 'required|string',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->image->store('category');
        } else {
            $image = 'category/default-category.png';
        }
        // dd($image);

        Category::create([
            'name' => $request->name,
            'category_image' => $image
        ]);


        toastr()->success('Category Added Successfully.', 'Successfully!!!');

        return redirect(route('category.index'));
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
    public function edit(Category $category)
    {
        return view('pages.category.create')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string'
        ]);
        $data = $request->only(['name']);
        //Check if new img
        if ($request->hasFile('image')) {
            //upload it
            $image = $request->image->store('category');
            //delete
            $category->deleteImage();
            $data['category_image'] = $image;
        } else {
            $image = 'category/default-category.png';
            $data['category_image'] = $image;
        }


        $category->update($data);

        toastr()->success('Category Updated Successfully.', 'Finally!!!');


        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->foods->count() > 0) {
            toastr()->error('Category not Empty.', 'Error!!!');
            
            return redirect()->back();
        }
        $category->delete();
        toastr()->success('Category Deleted Successfully.', 'Successfully!!!');


        return redirect(route('category.index'));
    }
}
