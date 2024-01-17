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



    public function mount(Customer $customer){
      $this->customer = $customer;
      $this->name = $customer->name;
      $this->email = $customer->email;
      $this->phone = $customer->phone;


    }

    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function updatecustomer(){
        $validate = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',

         ]);

         $this->customer->update($validate);
         session()->flash('success', 'customer updated');
         return $this->redirect('/customers', navigate:true);

    }
}
