<?php

namespace App\Http\Controllers;

use App\Mail\EmailSend;
use App\Models\CustomerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerMailController extends Controller
{
    public function mailSent(Request $request){
        $data = [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'required',
        ];
        $validatedData = $request->validate($data);

        // $widget = CustomerMail::first();
        // $email = $widget->email;


        // Send email using Laravel Mail
        Mail::to('riad53701@gmail.com')->send(new EmailSend($validatedData));
        return redirect('/#contact')->with('message', 'Message sent successfully!');
    }
}
