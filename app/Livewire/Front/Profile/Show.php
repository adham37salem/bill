<?php

namespace App\Livewire\Front\Profile;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout("components.layouts.app")]
    public function render()
    {
        return view('livewire.front.profile.show');
    }
}
