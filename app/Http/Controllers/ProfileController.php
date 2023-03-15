<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $imageName = '';

        // Vérifiez si une nouvelle photo de profil a été téléchargée
        if ($request->hasFile('picture')) {
            // Supprimez la photo de profil actuelle si elle existe
            if ($user->picture) {
                Storage::delete('public/pictures/'.$user->picture);
                $user->picture = '';
            }

            // Stockez la nouvelle photo de profil et associez-la à l'utilisateur
            $imageName = '/storage/pictures/' . $request->file('picture')->hashName();
            $request->file('picture')->storePublicly('public/pictures');
        }

        // Mettez à jour les autres champs du profil utilisateur
        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
        
        $user->picture = $imageName;

        $user->save();

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
