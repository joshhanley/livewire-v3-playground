<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

class Main extends Component
{
    #[Locked]
    public $inviteResponse;

    public $inviteResponse2 = null;
    
    public function render()
    {
        return view('livewire.main');
    }
}
