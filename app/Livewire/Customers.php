<?php

namespace App\Livewire;
use App\Models\Customer;
use Livewire\Component;
use App\Facades\CustomerFacade;

class Customers extends Component
{   
    public $customers=[];
    public function mount() {
        $this->customers = CustomerFacade::getAll();
    }

    

    public function render()
    {
        return view('livewire.customers');
    }

    public function deletecustomer(Customer $customer){
        $customer->delete();
        session()->flash('success','Customer Deleted Successfully');
        return $this->redirect('/customers',navigate:true);
    }
}
