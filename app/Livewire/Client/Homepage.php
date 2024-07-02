<?php

namespace App\Livewire\Client;

use Livewire\Component;
use Livewire\Attributes\Title;

class Homepage extends Component
{
    #[Title('Homepage')]
    public function render()
    {
        return view('livewire.client.homepage');
    }
}
