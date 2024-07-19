<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at')->get();
        return view('admin.contacts.index',[
            'contacts' => $contacts
        ]);
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return to_route('admin.contacts.index')->with('message', 'Contact Deleted Successfully');
    }
}
