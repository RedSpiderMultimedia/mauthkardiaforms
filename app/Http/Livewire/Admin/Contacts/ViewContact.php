<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Contact;
use Livewire\Component;

class ViewContact extends Component
{
    public Contact $contact;
    public $name;
    public $subject;
    public $email;
    public $phone;
    public $message;

    public function mount($id) {
        $contact = Contact::find($id);

        $this->contact_id = $contact->id;
        $this->name = $contact->name;
        $this->subject = $contact->subject;
        $this->email = $contact->email;
        $this->phone = $contact->phone;
        $this->message = $contact->message;
    }
    public function render()
    {
        return view('livewire.admin.contacts.view-contact');
    }
}
