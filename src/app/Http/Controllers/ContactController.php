<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Contact;

class ContactController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function confirm(Request $request) {
        $contact = $request->only(['last-name','first-name','gender','email','postcode','address','building','content']);
        return view('confirm', compact('contact'));
    }

    public function thanks() {
        return view('thanks');
    }

//    public function index() {
//        return view('index');
//    }
}
