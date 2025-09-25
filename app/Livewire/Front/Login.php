<?php

namespace App\Livewire\Front;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    #[Layout("components.layouts.app")]
    public function render()
    {
        return view('livewire.front.login');
    }
}
