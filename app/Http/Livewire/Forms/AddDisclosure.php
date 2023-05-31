<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use App\Models\Disclosure;
use Illuminate\Support\Facades\Auth;

class AddDisclosure extends Component
{

    public $name;
    public $disclose_name;
    public $disclose_phone;
    public $disclose_address;
    public $disclose_fax;
    public $ssn;
    public $releasable_info = [];
    public $purpose = [];
    public $expiry_date;
    public $dob;
    public $signature;
    public $date;
    public $guardian;



    protected $rules = [
        'name' => 'required|min:5',
        'disclose_name' => 'required',
        'disclose_phone' => 'required',
        'disclose_address' => 'required',
        'ssn' => 'required',
        'releasable_info' => 'required',
        'purpose' => 'required',
        'signature' => 'required',
        'date' => 'required',
        'dob' => 'required',

    ];
    public function mount(){



    }

    public function save(){

        //dd($this->disclose_name);
        $this->validate();
        Disclosure::create([
            'name' => $this->name,
            'disclose_name' => $this->disclose_name,
            'disclose_phone' => $this->disclose_phone,
            'disclose_address' => $this->disclose_address,
            'disclose_fax' => $this->disclose_fax,
            'releasable_info' => $this->releasable_info,
            'purpose' => $this->purpose,
            'expiry_date' => $this->expiry_date,
            'ssn' => $this->ssn,
            'signature' => $this->signature,
            'date' => $this->date,
            'dob' => $this->dob,
            'guardian' => $this->guardian,
        ]);
    }

    public function render()
    {
        return view('livewire.forms.add-disclosure');
    }
}
