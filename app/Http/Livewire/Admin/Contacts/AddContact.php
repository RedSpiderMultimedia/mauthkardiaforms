<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Contact;
use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class AddContact extends Component
{
    public $name;
    public $subject;
    public $email;
    public $phone;
    public $message;
    public $contact;

    protected $rules = [
        'name' => 'required|max:55',
        'subject' => 'required|max:255',
        'email' => 'required|email|max:75',
        'phone' => 'nullable',
        'message' => 'required',
    ];

    public function save() {

        $contact = new Contact();

        $this->validate();

            $contact->name = $this->name;
            $contact->subject = $this->subject;
            $contact->email = $this->email;
            $contact->phone = $this->phone;
            $contact->message = $this->message;
            $contact->save();


        Mail::to('rodney.spencer@mac.com')->send(new ContactMail($contact));

        return redirect('/contact')->with('message', 'Your message has been successfully sent.');

    }

    public function render()
    {
        return view('livewire.admin.contacts.add-contact')
        ->layout('layouts.contact');
    }
}
