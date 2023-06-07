<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio\Rest\Client;

class SmsController extends Controller
{
    // send sms

    public function sendsms(Request $request)
    {
        {
            $sender_phone = $request->phone;
            $sender_message = $request->message;
        
            // Get the Twilio credentials and sender number from environment variables
            $id = getenv("TWILIO_SID");
            $token = getenv("TWILIO_TOKEN");
            $sendernumber = getenv("TWILIO_PHONE");
        
            // Create a new instance of the Twilio client
            $twilio = new Client($id, $token);
        
            // Check if the recipient phone number is not null
            if ($sender_phone !== null) {
                // Send an SMS message
                $message = $twilio->messages->create(
                    $sender_phone,
                    [
                        'from' => $sendernumber,
                        'body' => $sender_message,
                    ]
                );
        
                // Display a success message
                   
                return redirect()->back()->with('message','Product Added Successfully !!');
            } else {
                // Handle the case where the recipient phone number is null
                // dd("Recipient phone number is null");

                return view('user.sendsms');

            }
        }
        
    }
}
