<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Contact;
class ContactUsController extends Controller
{
    public function contactUs(){
        return view("welcome");
    }

    public function saveContactUs(ContactFormRequest $request){
        
        $name=$request->name;
        $email=$request->email;
        $mobile=$request->mobile;
        $message=$request->message;

        $contact=new Contact();
      
        $contact->name=$name;
        $contact->email=$email;
        $contact->mobile=$mobile;
        $contact->message=$message;
        $contact->save();
        
    }
}
