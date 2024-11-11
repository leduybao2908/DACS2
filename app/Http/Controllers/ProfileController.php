<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
        // Validate incoming request data
        $data = $request->validated();
    
        // If there's an uploaded image, handle the upload
        if ($request->hasFile('image_url')) {
            // Generate a unique filename based on the user_id and current time
            $filename = Auth::id() . '-' . time() . '.' . $request->file('image_url')->getClientOriginalExtension();
    
            // Store the image in the 'public' disk (storage/app/public)
            $path = $request->file('image_url')->storeAs('users', $filename, 'public');
    
            // Save the image URL to the user's image_url column
            $data['image_url'] = $path;
        }
    
        // Update the user model with the validated data
        $request->user()->fill($data);
    
        // If the email is updated, reset the email verification
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
    
        // Save the updated user data
        $request->user()->save();
    
        // Redirect with a success message
        return redirect()->route('user-profile')->with('status', 'profile-updated');
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
