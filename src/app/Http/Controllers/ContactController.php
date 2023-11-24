<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact(Request $request) {
        return view('contact');
    }

    public function confirm(ContactRequest $request) {
        $contact = $request->only(['last-name','first-name','gender','email','postcode','address','building','content']);
        $gender = $contact['gender'];
        $genderString = ($gender == 1) ? '男性' : '女性';
        $contact['gender_string'] = $genderString;
        return view('confirm', compact('contact'));
    }

    public function thanks(Request $request) {
        $contacts = $request->all();
        Contact::create($contacts);
        return view('thanks');
    }

    public function index() {
        $contacts = Contact::Paginate(2);
        return view('index', ['contacts' => $contacts]);
    }

    public function destroy(Request $request) {
        Contact::find($request->id)->delete();
        return redirect('/index');
    }
}
