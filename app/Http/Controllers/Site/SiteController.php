<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string'
        ]);
        DB::beginTransaction();
        $contact = Contact::create($request->except('_token'));
        Mail::to('moh.sharaby@yahoo.com')->send(new ContactEmail($contact));
        Mail::to('hello@collective-25.com')->send(new ContactEmail($contact));
        DB::commit();
        return redirect()->back()->with('success', 'Message Sent Successfully');
    }
}
