<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function show()
    {
        return view('mail-form')->with(['taco' => 'nacho']);
    }

    public function store(Request $request)
    {
        // return $request->recipient;

        Mail::to($request->recipient)->send(new SendMail($request->message));

        return redirect('/mailer');
    }
}
