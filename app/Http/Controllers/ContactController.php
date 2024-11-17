<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Prepare email details
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Send email
        Mail::to('ble37588@gmail.com')->send(new \App\Mail\ContactMail($details));

        // Redirect back with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
    public function showContactForm()
    {
        return view('contact'); // Trả về view tên là 'contact.blade.php'
    }
}
