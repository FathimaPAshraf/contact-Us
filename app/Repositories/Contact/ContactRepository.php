<?php

namespace App\Repositories\Contact;

use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    
    public function savecontact($contactData)
    {
        $contact=new Contact();
      
        $contact->name=$contactData['name'];
        $contact->email=$contactData['email'];
        $contact->mobile=$contactData['mobile'];
        $contact->message=$contactData['message'];
        $contact->save(); 
        return $contact;
    }
    
      public function getContacts()
    {
        $contacts = Contact::all();
        return $contacts;
    }
    
}
