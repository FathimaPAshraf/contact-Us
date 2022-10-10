<?php

namespace App\Repositories\Contact;

interface ContactRepositoryInterface
{

    
    public function saveContact($contactData);

    public function getContacts();
   
    
}
