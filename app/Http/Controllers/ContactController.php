<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Optional: send email
        /*
        Mail::send([], [], function ($message) use ($validated) {
            $message->to('support@barangaycloud.com')
                    ->subject('New Contact Form Submission')
                    ->setBody(
                        "Name: {$validated['name']}\n".
                        "Email: {$validated['email']}\n".
                        "Message: {$validated['message']}"
                    );
        });
        */

        // For now, you can just flash a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
