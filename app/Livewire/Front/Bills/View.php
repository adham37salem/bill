<?php

namespace App\Livewire\Front\Bills;

use Livewire\Attributes\Layout;
use Livewire\Component;

class View extends Component
{
    #[Layout("components.layouts.app")]
    public function render()
    {
        return view('livewire.front.bills.view');
    }
}
