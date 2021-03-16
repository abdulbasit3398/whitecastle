<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','admin.access']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    public function pricing()
    {
        return view('admin.pricing');
    }
    public function contact()
    {
        return view('admin.contact');
    }
    public function send_contact(Request $request)
    {
        

        $new_email = 'abdulbasit3398@gmail.com';
          $new_email_body = 'First name: '.$request->first_name.'<br/>Last name: '.$request->last_name.'<br/>Email: '.$request->email.'<br/>Contact: '.$request->contact_number.'<br/>Message: '.$request->message;
          $new_email_subject = 'Contact Prospects';

          Mail::send([], [], function ($message) use ($new_email,$new_email_subject,$new_email_body){
            $message->to($new_email)
              ->subject($new_email_subject)
              // here comes what you want
              ->setBody($new_email_body, 'text/html'); // for HTML rich messages
          });


        return redirect()->back()->with('success','Information submited successfully.');
    }
    public function my_account()
    {
        return view('admin.my_account');
    }
}
