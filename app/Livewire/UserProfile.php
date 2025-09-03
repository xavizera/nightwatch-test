<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Component
{
    public $name = '';
    public $message = '';

    public function updateName()
    {
        Context::add('method', 'UserProfile');

        $this->name = 'Test Name Updated';
        $this->message = 'Name updated successfully! Context added for Nightwatch tracking.';
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
