<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string'
        ]);

        Contact::create($request->except('_token'));
     //   return redirect(route('site.contact'))->with('success', 'Message Sent Successfully');
        return redirect()->back()->with('success', 'Message Sent Successfully');
    }
}
