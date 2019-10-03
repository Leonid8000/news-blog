<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Role;

//$this->middleware('can:permission');

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();

        return view('admin.permission.show', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.permission.create');
        
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

            'name' => 'required|max:50|unique:permissions',

            'for_permission' => 'required',

        ]);

        $permission = new Permission();

        $permission->name = $request->name;

        $permission->for_permission = $request->for_permission;

        $permission->save();

        return redirect(route('permission.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
       $permission =  Permission::where('id', $id)->first();

        return view('admin.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $this->validate($request, [

            'name' => 'required|max:50',

            'for_permission' => 'required',

        ]);

        $permission = Permission::find($id);

        $permission->name = $request->name;
        $permission->for_permission = $request->for_permission;
        $permission->save();

        return redirect(route('permission.index'))->with('message', 'Permission updated succes');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::where('id', $id)->delete();

        return redirect()->back()->with('message', 'Permission Deleted success');
    }
}
