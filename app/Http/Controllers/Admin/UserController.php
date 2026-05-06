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
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
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
