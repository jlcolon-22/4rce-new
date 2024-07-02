<?php

namespace App\Livewire\Client;

use Livewire\Attributes\Title;
use Livewire\Component;

class Projects extends Component
{

    #[Title('Projects')]
    public function render()
    {
        return view('livewire.client.projects');
    }
}
