<?php

namespace App\Http\Controllers;

use App\Repositories\PermissionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PermissionController extends AppBaseController
{
    

    /**
     * Display a listing of the Permission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $permissions = $this->permissionRepository->paginate(10);

        return view('permissions.index')
            ->with('permissions', $permissions)->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new Permission.
     *
     * @return Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created Permission in storage.
     *
     * @param CreatePermissionRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);
        $input = $request->all();

        $permission = $this->permissionRepository->create($input);

        toastr()->success('Permission Saved Successfully.','Finally!!!');

        return redirect(route('permissions.index'));
    }

    /**
     * Display the specified Permission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            toastr()->error('Permission not found','OOps!!!');

            return redirect(route('permissions.index'));
        }

        return view('permissions.show')->with('permission', $permission);
    }

    /**
     * Show the form for editing the specified Permission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            toastr()->error('Permission not found','OOps!!!');


            return redirect(route('permissions.index'));
        }

        return view('permissions.edit')->with('permission', $permission);
    }

    /**
     * Update the specified Permission in storage.
     *
     * @param int $id
     * @param UpdatePermissionRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name,' . $id,
        ]);
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            toastr()->error('Permission not found','OOps!!!');


            return redirect(route('permissions.index'));
        }

        $permission = $this->permissionRepository->update($request->all(), $id);

        toastr()->success('Permission Saved Successfully.','Finally!!!');


        return redirect(route('permissions.index'));
    }

    /**
     * Remove the specified Permission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            toastr()->error('Permission not found','OOps!!!');


            return redirect(route('permissions.index'));
        }

        $this->permissionRepository->delete($id);

        toastr()->success('Permission Deleted Successfully.','Finally!!!');


        return redirect(route('permissions.index'));
    }
}
