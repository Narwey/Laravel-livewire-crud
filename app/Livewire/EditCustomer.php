<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class EditCustomer extends Component
{   
    public $customer;
    public $name;
    public $email;
    public $phone;

    public function mount(Customer $customer) {
        $this->customer=$customer;
        $this->name=$customer->name;
        $this->email=$customer->email;
        $this->phone=$customer->phone;
    }

    public function updateCustomer() {
        $validated = $this -> validate([
            'name'=>'required',
            'email'=> 'required',
            'phone'=>'required',
        ]);

        $this->customer->update($validated);
        session()->flash('success','Customer Updated Successfully');
        return $this->redirect('/customers',navigate:true);
    }


    public function render()
    {
        return view('livewire.edit-customer');
    }
}
