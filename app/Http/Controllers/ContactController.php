<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class ContactController extends Controller
{

    public function saveContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone_number' => 'required|numeric',
            'message' => 'required',
        ]);


        $contact = new Contact;

        $contact->nom = $request->name;
        $contact->email = $request->email;
        $contact->telephone = $request->phone_number;
        $contact->site_web = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        $mail = Information::select("mail_reception")->first();
        if (!is_null($mail)) {
            $mail = Information::select("mail_reception")->first();
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'phone_number' => $request->phone_number,
                'desti'=>$mail->mail_reception
            ];
            FacadesMail::to($mail->mail_reception)->send(new ContactMail($data));
        }
        $response = ['message' => 'Merci de nous avoir contacter !'];
        return response()->json($response);
        //return back()->with('success', 'Merci de nous contacter !');
    }




    public function index_liste(){
        $contacts = Contact::paginate(15);
        return view('admin.contacts.index_contact')->with('contacts', $contacts);
    }



  

}
