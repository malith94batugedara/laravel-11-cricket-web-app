<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }

    public function store(Request $request){
        
        $contact = new Contact;

        $contact->name = $request->name;

        $contact->phone_number = $request->phone_number;

        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message','Your Data Sent Successfully!');
        
    }
}
