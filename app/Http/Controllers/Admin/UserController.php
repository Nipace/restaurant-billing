<?php

namespace App\Http\Controllers\Admin;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->hasRole('Super-Admin')) {
            $data = User::orderBy('id', 'DESC')->get();
        } else {
            $data = User::orderBy('id', 'DESC')->role(['User', 'Cashier'])->get();
        }

        return view('pages.user.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->hasRole('Super-Admin')) {
            $roles = Role::pluck('name', 'name')->all();
        }elseif(Auth::user()->hasRole('User')){
            $roles = Role::where('name', '!=', 'Super-Admin')->where('name', '!=', 'Admin')->where('name', '!=', 'Tester')->pluck('name', 'name')->all();
        }else{
            $roles = Role::where('name', '!=', 'Super-Admin')->where('name', '!=', 'Admin')->where('name', '!=', 'Tester')->pluck('name', 'name')->all();
        }

        return view('pages.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        toastr()->success('User Saved Successfully.', 'Successfully!!!');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
         if (Auth::user()->hasRole('Super-Admin')) {
            $roles = Role::pluck('name', 'name')->all();
        }elseif(Auth::user()->hasRole('User')){
            $roles = Role::where('name', '!=', 'Super-Admin')->where('name', '!=', 'Admin')->where('name', '!=', 'Tester')->pluck('name', 'name')->all();
        }else{
            $roles = Role::where('name', '!=', 'Super-Admin')->where('name', '!=', 'Admin')->where('name', '!=', 'Tester')->pluck('name', 'name')->all();
        }
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('pages.user.edit', compact('user', 'roles', 'userRole'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));
        toastr()->success('User Updated Successfully.', 'Successfully!!!');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        toastr()->success('User Deleted Successfully.', 'Successfully!!!');

        return redirect()->route('users.index');
    }
    public function profile()
    {
        return view('pages.user.show');
    }
}
