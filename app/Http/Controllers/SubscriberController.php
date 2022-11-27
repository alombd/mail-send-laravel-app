<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers'
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        $email = $request->all()['email'];
            $subscriber = Subscriber::create([
                'email' => $email
            ]
        ); 

        if ($subscriber) {
            Mail::to($email)->send(new Subscribe($email));
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "Thank you for subscribing to our email, please check your inbox"
                ], 
                200
            );
        }
    }
}
