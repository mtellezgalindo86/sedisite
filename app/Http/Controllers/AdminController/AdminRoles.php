<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminRoles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $rules = ['name' => 'required|unique:roles,name'];
    public function index()
    {
        //
        return view('admin_dashboard.roles.index', [
            'roles' => Role::paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin_dashboard.roles.create',[
            'permissions' =>Permission::all(),
        ]);
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
        $validated = $request->validate($this->rules);
        $permissions = $request->input('permissions');
        
        $role = Role::create($validated);
        
        $role->permissions()->sync( $permissions );

        return redirect()->route('sediadministrador.roles.create')->with('success', 'El nuevo rol ha sido creado');
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
    public function edit(Role $role)
    {
        return view('admin_dashboard.roles.edit', [
            'role' => $role,
            'permissions' => Permission::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->rules['name'] = ['required', Rule::unique('roles')->ignore($role)];
        $validated = $request->validate($this->rules);
        $permissions = $request->input('permissions');
        
        $role->update($validated);
        $role->permissions()->sync( $permissions );
        
        return redirect()->route('sediadministrador.roles.edit', $role)->with('success', 'El rol ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('sediadministrador.roles.index')->with('success', 'El rol ha sido borrado');
    }
}
