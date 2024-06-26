<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $user = auth()->loginUsingId(2);
        $sent =  Mail::to($user)->send(new Contact([
            'fromName' => $request->input('name'),
            'fromEmail' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]));

        var_dump('email sent', $sent);
    }
}
