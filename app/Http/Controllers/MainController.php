<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $pageSetting = \App\Models\PageSetting::first();
        return view('pages.index', compact('pageSetting'));
    }

    public function thankyou()
    {
        $pageSetting = \App\Models\PageSetting::first();
        return view('pages.thankyou', compact('pageSetting'));
    }

    public function storeLead(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new lead
        \App\Models\Lead::create($validated);

        // Redirect to thank you page with a success message
        return redirect()->route('thankyou')->with('success', 'Thank you for your message! We will get back to you soon.');
    }

}
