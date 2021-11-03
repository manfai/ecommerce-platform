<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubscribeWidget extends Component
{
    public $email;

    public function saveContact()
    {
        dd($this->email);
    }

    public function render()
    {
        return view('livewire.subscribe-widget');
    }
}
