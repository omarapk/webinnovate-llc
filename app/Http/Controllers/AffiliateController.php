<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AffiliateFormSubmission;

class AffiliateController extends Controller
{
    public function showForm()
    {
        return view('affiliate.form');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'website' => 'nullable|url|max:255',
            'social_media' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:1000',
            'motivation' => 'nullable|string|max:1000',
        ]);

        // Prepare the data
        $formData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
            'social_media' => $request->social_media,
            'experience' => $request->experience,
            'motivation' => $request->motivation,
            'submitted_at' => now()->format('Y-m-d H:i:s'),
        ];

        try {
            // Send email to admin
            Mail::to('admin@example.com')->send(new AffiliateFormSubmission($formData));

            return redirect()->back()->with('success', 'Thank you! Your affiliate application has been submitted successfully. We will contact you soon!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sorry, there was an error submitting your application. Please try again or contact us directly.');
        }
    }
}
