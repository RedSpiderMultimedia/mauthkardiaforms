<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Contact;
use Livewire\Component;

class ShowContacts extends Component
{

    public function mount(){
        $this->contacts = Contact::all();
    }

    public function destroy($id){

        //dd('test');
        $contact = Contact::where('id', $id);
        $contact->delete();
        $this->mount();
    }
    public function render()
    {
        return view('livewire.admin.contacts.show-contacts');
    }
}
