<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nomor' => 'required|max:15',
            'email' => 'required|email',
            'alamat' => 'required'
        ]);
        $contact = new Contact();
        $contact->nomor = $validateData['nomor'];
        $contact->email = $validateData['email'];
        $contact->alamat = $validateData['alamat'];
        $contact->save();

        return redirect()->route('contact.index')->with('pesan', "Contact Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $validateData = $request->validate([
            'nomor' => 'required|max:15',
            'email' => 'required|email',
            'alamat' => 'required'
        ]);
        $contact = Contact::find($contact->id);
        $contact->nomor = $validateData['nomor'];
        $contact->email = $validateData['email'];
        $contact->alamat = $validateData['alamat'];
        $contact->save();

        return redirect()->route('contact.index')->with('pesan', "Contact Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
