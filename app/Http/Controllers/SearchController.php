<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Rules\ZipCodeRule;
use Illuminate\Http\Request;
use App\Http\Requests\AccessRequest;
use App\Http\Requests\AutoRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Contact;
use App\Models\Check;

class SearchController extends Controller
{
    public function find() {
        $page = Contact::Paginate(10);
        $users = Auth::user();
        $checks = Check::all();
        return view('search', ['page' => $page, 'users' => $users, 'checks' => $checks]);
    }
    public function search(Request $request) {
        $page = Contact::Paginate(10);
        $user = Auth::user();
        $checks = Check::all();
        $name = $request->input('name');
        $check_id = $request->input('check_id');
        $created_at = $request->input('created_at');
        $email = $request->input('email');

        $query = Contact::query();

        if(isset($name)) {
            $query->where('name', 'like binary', "%{$request->name}%");
        }
        if(isset($check_id)) {
            $query->where('check_id', "%{$request->check_id}%");
        }
        if(isset($created_at)) {
            $query->where('created_at', 'like binary', "%{$request->created_at}%");
        }
        if(isset($email)) {
            $query->where('email', 'like binary', "%{$request->email}%");
        }
        $contacts = $query->get();

        $param = [
            'page' => $page, 'user' => $user, 'checks' => $checks, 'name' => $name, 'check_id' => $check_id, 'created_at' => $created_at, 'email' => $email, 'contacts' => $contacts
        ];
        return view('search', $param);
    }    
    public function delete(Request $request) {
        Contact::where('id', $request->id)->delete();
        return redirect('/find');
    }
}
