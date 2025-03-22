<?php

namespace App\Http\Controllers\client\profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ParametreController extends Controller
{
    public function index(){
        return view('client.profile.parametres.index');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('client.profile.parametres.index', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $data = $request->validated();
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $data['image'] = $imagePath;
        }
    
         
         if ($request->has('dlt_profile') && $request->dlt_profile == 1) {
            // if dlt checked 
            if ($user->image && $user->image !== 'default.jpg' && Storage::exists('public/profile_images/' . $user->image)) {
                Storage::delete('public/profile_images/' . $user->image); 
            }
            $data['image'] = 'default.jpg'; 
        }
    
        $user->fill($data);
    
    
        $user->fill($data);
    
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
    
        $user->save();
    
        return Redirect::route('client.profile.monprofile.index')->with('status', 'Profil mis à jour avec succès');
    }
 
    public function deleteProfileImage(Request $request)
{
    $user = Auth::user();

    if ($user->image && $user->image !== 'default.jpg' && Storage::exists('public/profile_images/' . $user->image)) {
        Storage::delete('public/profile_images/' . $user->image);
    }

    // Set the profile image to default
    $user->image = 'default.jpg';
    $user->save();

    return response()->json(['message' => "L' image de profil supprimée avec succès"]);
}


    
    
    

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
