<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::with('roles')->latest()->paginate(10);
        $roles = \App\Models\Role::withCount('users')->get();
        return view('admin.users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        $roles = \App\Models\Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|exists:roles,id',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->roles()->sync([$request->role]);

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    /**
     * Reset the user's password.
     */
    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user->update([
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
        ]);

        return back()->with('success', 'Mot de passe réinitialisé avec succès.');
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user)
    {
        if ($user->isadmin) {
            return back()->with('error', 'Vous ne pouvez pas supprimer un administrateur.');
        }

        // Optional: Check if user has active reservations before deleting
        if ($user->reservations()->exists()) {
            return back()->with('error', 'Cet utilisateur a des réservations actives et ne peut pas être supprimé.');
        }

        $user->delete();

        return back()->with('success', 'Utilisateur supprimé avec succès.');
    }
}
