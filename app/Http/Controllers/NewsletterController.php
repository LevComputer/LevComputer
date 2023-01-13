<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function save( Request $request)
    {
        $newsletter = new newsletter();
        $newsletter->newsletter_email = $request->newsletter_email;
        $newsletter->save();

        return back()->with('message', 'Subscribe has been sent');
    }

    public function manage()
    {
        $newsletters = newsletter::all();
        return view('BackEnd.inbox.manageSubscribe', compact('newsletters'));
    }
}