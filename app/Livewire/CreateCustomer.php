<?php

namespace App\Livewire;

use Livewire\Component;
use App\models\Customer;
use App\Facades\CustomerFacade;



class CreateCustomer extends Component
{   

    public $name='';
    public $email='';
    public $phone='';
    public $genre='';
    public function render()
    {
        return view('livewire.create-customer');
    }

    public function validation() {

    }

    public function save() {
        $validated = $this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'genre'=>'required',
        ]);
        $formmattedCustomer = CustomerFacade::formatCustomer($validated);
        CustomerFacade::create($formmattedCustomer);
        // Customer::create($validated);
        session()->flash('success','Customer Created Successfully');
        return $this->redirect('/customers',navigate:true);
    }
}
