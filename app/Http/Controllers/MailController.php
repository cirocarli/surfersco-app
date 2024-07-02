<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;

class MailController extends Controller
{
    // public function mailform()
    // {
    //     return view('home');
    // }
    public function maildata(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = 'Laravel Email Test';
        $birthPlace = $request->birthPlace;
        $birthday = $request->birthday;
        $phone = $request->phone;
        $company = $request->company;
        $mailMessage = $request->mailMessage;
        $mailData = [
            'url' => 'https://sandroft.com/',
        ];
        $send_mail = config('mail.contact_recipient');
        // env('CONTACT_RECIPIENT_EMAIL');
        Mail::to($send_mail)->send(new SendMail($name, $email, $birthPlace, $birthday, $phone, $company, $subject, $mailMessage));
        $senderMessage = "Thank you for your message , we will reply soon";
        Mail::to($email)->send(new
            SendMessageToEndUser($name, $senderMessage, $mailData));
        // return "Mail Send Successfully";
        return response()->json(['message' => 'Email sent successfully!']);

    }
}
