<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Assessment;

class Dashboard extends Component
{

    public $assessments;

    public function mount(){
        $assessments = Assessment::all();
        $this->assessments = $assessments;
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
