<?php

namespace Msilabs\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Msilabs\Contact\Mail\ContactMailable;
use Msilabs\Contact\Models\Contact;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        $contact = null;

        if($request->id) {
            $contact = Contact::find($request->id) ?? null;
        }

        return view("contact::contact", compact('contact'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string',
        ]);

        $contact = Contact::create($data);

        Mail::to(config('contact.send_email_to'))
            ->cc(config('contact.cc'))
            ->bcc(config('contact.bcc'))
            ->send(new ContactMailable($contact));
        
        return to_route('contact', ['id' => $contact->id]);
    }
}