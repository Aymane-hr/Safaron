<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

use App\Models\Permission;

class RoleController extends Controller
{

    /**
     * Show the form for creating a new role.
     */
    public function create()
    {
        $services = ['Dashboard', 'Utilisateurs', 'Roles', 'Villes', 'Type Voyages', 'Mode Reglements', 'Reservations', 'Voyages', 'Societes', 'Autocars', 'Equipements', 'Options'];
        $actions = ['read', 'create', 'update', 'delete'];
        
        return view('admin.roles.create', compact('services', 'actions'));
    }

    /**
     * Store a newly created role in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles',
            'permissions' => 'array'
        ]);

        $role = Role::create([
            'name' => $request->name,
            'slug' => \Illuminate\Support\Str::slug($request->name),
        ]);

        if ($request->has('permissions')) {
            $permissionIds = [];
            foreach ($request->permissions as $permName) {
                $permission = Permission::firstOrCreate(
                    ['name' => $permName],
                    ['slug' => \Illuminate\Support\Str::slug($permName)]
                );
                $permissionIds[] = $permission->id;
            }
            $role->permissions()->sync($permissionIds);
        }

        return redirect()->route('admin.users.index')->with('success', 'Rôle créé avec succès.');
    }

    /**
     * Show the form for editing the specified role.
     */
    public function edit(Role $role)
    {
        $services = ['Dashboard', 'Utilisateurs', 'Roles', 'Villes', 'Type Voyages', 'Mode Reglements', 'Reservations', 'Voyages', 'Societes', 'Autocars', 'Equipements', 'Options'];
        $actions = ['read', 'create', 'update', 'delete'];
        $rolePermissions = $role->permissions->pluck('name')->toArray();

        return view('admin.roles.edit', compact('role', 'services', 'actions', 'rolePermissions'));
    }

    /**
     * Update the specified role in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
            'permissions' => 'array'
        ]);

        $role->update([
            'name' => $request->name,
            'slug' => \Illuminate\Support\Str::slug($request->name),
        ]);

        if ($request->has('permissions')) {
            $permissionIds = [];
            foreach ($request->permissions as $permName) {
                $permission = Permission::firstOrCreate(
                    ['name' => $permName],
                    ['slug' => \Illuminate\Support\Str::slug($permName)]
                );
                $permissionIds[] = $permission->id;
            }
            $role->permissions()->sync($permissionIds);
        } else {
            $role->permissions()->detach();
        }

        return redirect()->route('admin.users.index')->with('success', 'Rôle mis à jour avec succès.');
    }

    /**
     * Remove the specified role from storage.
     */
    public function destroy(Role $role)
    {
        if ($role->users()->exists()) {
            return back()->with('error', 'Impossible de supprimer un rôle attribué à des utilisateurs.');
        }

        $role->delete();

        return back()->with('success', 'Rôle supprimé avec succès.');
    }
}
