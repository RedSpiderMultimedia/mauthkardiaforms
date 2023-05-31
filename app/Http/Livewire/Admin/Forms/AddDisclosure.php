<?php

namespace App\Http\Livewire\Admin\Forms;

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

    public $user_id;

    protected $rules = [
        'name' => 'required|min:5',
        'ssn' => 'required',
        'releasable_info' => 'required',
        'purpose' => 'required',
        'signature' => 'required',
        'date' => 'required',
        'user_id' => 'required',

    ];
    public function mount(){



    }

    public function save(){
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
            'user_id' => $this->user_id,
        ]);
    }

    public function render()
    {
        return view('livewire.admin.forms.add-disclosure');
    }
}
