<?php

namespace App\Http\Controllers;

use App\Mail\AffiliateFormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AffiliateController extends Controller
{
    public function showForm()
    {
        return view('affiliate.application');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'whatsapp_number' => 'required|string',
            'country' => 'required|string',
            'preferred_language' => 'required|string',
            'cod_business' => 'required|in:yes,no',
            'business_type' => 'required|string',
            'community_size' => 'required|string',
            'promotion_channels' => 'required|array|min:1',
            'other_business_type' => 'nullable|string',
            'other_channels' => 'nullable|string',
            // Channel detail fields
            'youtube_channel_name' => 'nullable|string',
            'youtube_followers' => 'nullable|integer|min:0',
            'instagram_username' => 'nullable|string',
            'instagram_followers' => 'nullable|integer|min:0',
            'facebook_page_name' => 'nullable|string',
            'facebook_followers' => 'nullable|integer|min:0',
            'tiktok_username' => 'nullable|string',
            'tiktok_followers' => 'nullable|integer|min:0',
            'twitter_username' => 'nullable|string',
            'twitter_followers' => 'nullable|integer|min:0',
            'linkedin_profile_name' => 'nullable|string',
            'linkedin_connections' => 'nullable|integer|min:0',
            'website_url' => 'nullable|url',
            'website_monthly_visitors' => 'nullable|integer|min:0',
        ]);

        // Prepare the data
        $formData = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'whatsapp_number' => $request->whatsapp_number,
            'country' => $request->country,
            'preferred_language' => $request->preferred_language,
            'cod_business' => $request->cod_business,
            'business_type' => $request->business_type,
            'other_business_type' => $request->other_business_type,
            'community_size' => $request->community_size,
            'promotion_channels' => $request->promotion_channels,
            'other_channels' => $request->other_channels,
            // Channel details
            'youtube_channel_name' => $request->youtube_channel_name,
            'youtube_followers' => $request->youtube_followers,
            'instagram_username' => $request->instagram_username,
            'instagram_followers' => $request->instagram_followers,
            'facebook_page_name' => $request->facebook_page_name,
            'facebook_followers' => $request->facebook_followers,
            'tiktok_username' => $request->tiktok_username,
            'tiktok_followers' => $request->tiktok_followers,
            'twitter_username' => $request->twitter_username,
            'twitter_followers' => $request->twitter_followers,
            'linkedin_profile_name' => $request->linkedin_profile_name,
            'linkedin_connections' => $request->linkedin_connections,
            'website_url' => $request->website_url,
            'website_monthly_visitors' => $request->website_monthly_visitors,
            'submitted_at' => now()->format('Y-m-d H:i:s'),
        ];

        try {
            // Send email to admin
            Mail::to('abdellahe.7ammani@gmail.com')->send(new AffiliateFormSubmission($formData));

            return redirect()->back()->with('success', 'Thank you! Your affiliate application has been submitted successfully. We will contact you soon!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sorry, there was an error submitting your application. Please try again or contact us directly.');
        }
    }
}
