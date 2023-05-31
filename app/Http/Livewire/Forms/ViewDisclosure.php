<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use App\Models\Disclosure;

class ViewDisclosure extends Component
{
    public function mount($id) {
        $this->disclosure = Disclosure::find($id);
    }

    public function render()
    {
        return view('livewire.forms.view-disclosure');
    }
}
