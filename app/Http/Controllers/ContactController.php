<?php
namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mews\Purifier\Facades\Purifier;
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
        $sanitizedMessage = Purifier::clean($request->input('message'));

        // Prepare email details
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $sanitizedMessage,
        ];
       $email = $request->input('email');

       
        // Send email
        Mail::to($email)->send(new ContactMail($details));

        // Redirect back with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
    public function showContactForm()
    {
        return view('contact'); // Trả về view tên là 'contact.blade.php'
    }
}
