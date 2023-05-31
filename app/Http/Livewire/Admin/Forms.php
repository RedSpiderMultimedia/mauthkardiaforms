<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use App\Models\Assessment;
use App\Models\Disclosure;

class Forms extends Component
{

    public function mount() {

        $this->assessments = Assessment::all();
        $this->disclosures = Disclosure::all();

    }

    public function render()
    {
        return view('livewire.admin.forms');
    }
}
