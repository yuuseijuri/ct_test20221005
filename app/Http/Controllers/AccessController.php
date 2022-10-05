<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Rule;
use App\Rules\ZipCodeRule;
use Illuminate\Http\Request;
use App\Http\Requests\AccessRequest;
use App\Http\Requests\AutoRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Contact;
use App\Models\Check;

class AccessController extends Controller
{
    public function index()  {
        $users = Auth::user();
        $checks = Check::all();

        $contacts = Contact::all();
        $items = ['users' => $users, 'checks' => $checks, 'contacts' => $contacts];
        return view('index', $items);
    }
    public function add(AccessRequest $request) {
        $users = Auth::user();
        $checks = Check::all();
        $contacts = Contact::all();
        $items = ['users' => $users, 'checks' => $checks, 'contacts' => $contacts];
        $contact = new Contact;
        $form = $this->unsetToken($request);
        $form['user_id'] = Auth::id();
        $check = Contact::find($request->check_id);
        if($check == $users->id);
        // $contact->fill($form)->save();
        // $contact->fill($check)->save();
        return view('check', $items);
    }
    public function edit(Request $request) {
        $users = Auth::user();
        $checks = Check::all();
        $contacts = Contact::all();
        $items = ['users' => $users, 'checks' => $checks, 'contacts' => $contacts];
        $contact = new Contact;
        $form = $this->unsetToken($request);
        $form['user_id'] = Auth::id();
        $check = Contact::find($request->check_id);
        if($check == $users->id);
        // $contact->fill($form)->save();
        // $contact->fill($check)->save();
        return view('thanks', $items);
    }
    public function unsetToken($request) {
        $form = $request->all();
        unset($form['_token']);
        return $form;
    }
}
