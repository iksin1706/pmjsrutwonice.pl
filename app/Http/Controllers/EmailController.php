<?php

namespace App\Http\Controllers;

use App\Mail\QuestionEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\YourEmailMailable;

class EmailController extends Controller
{

    
    public function sendEmail(Request $request)
    {
        // Validate input
        $request->validate([
            'recipient' => 'required|email',
            'message' => 'required|string',
        ]);
    
        // Send the email
        Mail::to("jasinskilukasz7@gmail.com")->send((new QuestionEmail($request->message,$request->recipient)));
    
        return response()->json(['message' => 'Email sent successfully']);
    }
}
;