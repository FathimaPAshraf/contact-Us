<?php

namespace App\Http\Controllers\API;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Contact\ContactRepositoryInterface as ContactRepository;


class ContactController extends Controller
{
    public function savecontact(ContactRepository $contactRepo, ContactFormRequest $request)
    {
        $contactData['name'] = $request->name;
        $contactData['email'] = $request->email;
        $contactData['mobile'] = $request->mobile;
        $contactData['message'] = $request->message;
       
        $ContactData = $contactRepo->savecontact($contactData);

        if (!empty($ContactData)) {
            $response = ['status' => true, 'message' => 'Contact Sent Successfully', 'data' => [$ContactData]];
            return response()->json($response, 200);
        } else {
            $response = ['status' => false, 'message' => 'Failed To Submit Contact', 'data' => []];
            return response()->json($response, 200);
        }

    }

    public function getContact(ContactRepository $contactRepo)
    {
    $contacts = $contactRepo->getContacts();

    if (!empty($contacts)) {
        $response = ['status' => true, 'message' => 'Contact recieved Successfully', 'data' => $contacts];
        return response()->json($response, 200);
    } else {
        $response = ['status' => false, 'message' => 'Failed To Submit Contact', 'data' => []];
        return response()->json($response, 200);
    }

}



    }

