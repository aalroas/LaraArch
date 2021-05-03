<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\contact;
use App\Model\admin\contact_form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {

           $contact = contact::find(1);

           return view('frontend.contact',compact('contact'));

    }




    public function send_message(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // $name = $request->input("name");
        // $email = $request->input("email");
        // $phone = $request->input("phone");
        // $subject = $request->input("subject");
        // $message = $request->input("message");


        // //Send Email
        // $mail  = new \stdClass();
        // $mail->name = $name;
        // $mail->subject = $subject;
        // $mail->message = $message . "</br> Phone:$phone";
        // Mail::to(get_option('contact_email'))->send(new ContactEmail($mail));



        //Save To database
        $contact_form  = new contact_form;
        $contact_form->name   = $request->name;
        $contact_form->subject = $request->subject;
        $contact_form->phone = $request->phone;
        $contact_form->email = $request->email;
        $contact_form->message = $request->message;
        $contact_form->save();




        // echo "<fieldset>";
        // echo "<div id='success_page'>";
        // echo "<h1>Email Sent Successfully.</h1>";
        // echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
        // echo "</div>";
        // echo "</fieldset>";


            $arr = array('msg' => trans('frontend.message_sended'), 'status' => true);
            return Response()->json($arr);

    }


}


