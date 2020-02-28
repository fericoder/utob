<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function footer(Request $request)
    {
        $to_name = 'Utob Footer Contact Form';
        $to_email = 'utobmedco@gmail.com';
        $data = array('name' => $request->fullName, "body" => $request->description, "email" => $request->email);
        \Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Utob Footer Contact Form');
            $message->from("utobmedco@gmail.com", 'Utob Footer Contact Form');
        });



    }
}
