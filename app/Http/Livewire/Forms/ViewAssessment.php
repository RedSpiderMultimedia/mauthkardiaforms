<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use App\Models\Assessment;

class ViewAssessment extends Component
{

    public function mount($id) {
        $this->assessment = Assessment::find($id);
    }

    public function render()
    {
        return view('livewire.forms.view-assessment');
    }
}
