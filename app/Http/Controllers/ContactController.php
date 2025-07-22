<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'first_name' => 'required|max:255',
        'last_name'  => 'required|max:255',
        'email'      => 'required|email',
        'phone'      => 'nullable',
        'message'    => 'nullable'
    ]);

    $contact = Contact::create($validated);

    return redirect()->back()
        ->with('success', 'Ձեր հաղորդագրությունը հաջողությամբ ուղարկվել է։')
        ->with('contact', $contact);
}

}
