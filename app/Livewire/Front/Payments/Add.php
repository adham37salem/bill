<?php

namespace App\Livewire\Front\Payments;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Add extends Component
{
    #[Layout("components.layouts.app")]
    public function render()
    {
        return view('livewire.front.payments.add');
    }
}
