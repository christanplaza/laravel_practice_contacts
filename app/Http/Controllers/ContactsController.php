<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(Request $request) {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create(Request $request) {
        return view('contacts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:4|max:16',
            'number' => 'required'
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'number' => $request->number
        ]);

        return redirect()->route('contact.index');
    }

    public function edit(Contact $contact) {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Contact $contact, Request $request) {
        $request->validate([
            'name' => 'required|min:4|max:16',
            'number' => 'required'
        ]);

        $contact->update([
            'name' => $request->name,
            'number' => $request->number
        ]);

        return redirect()->route('contact.index');
    }

    public function destroy(Contact $contact) {
        $contact->delete();

        return redirect()->route('contact.index');
    }
}
