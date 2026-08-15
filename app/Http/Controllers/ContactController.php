<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ContactController
{
    public function contactPage(): View
    {
        return view('contact'); // or your actual view path
    }
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/contact')
                ->withErrors($validator)
                ->withInput();
        }

        // Extract validated data
        $data = $validator->validated();

        // Send the contact form data via email
        $contactEmail = config('mail.contact_to');

        try {
            Mail::to($contactEmail)->send(new ContactFormMail($data));
        } catch (\Exception $e) {
            // Log the error message for debugging
            logger()->error('Mail sending failed: ' . $e->getMessage());

            return redirect('/projects')->with('error', 'An error occurred while sending your message. Please try again later.');
        }

        // Redirect back with a success message
        return redirect('/contact')->with('success', 'Your message has been sent successfully. Our sales expert will contact you shortly!');
    }
}
