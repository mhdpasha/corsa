<?php

namespace App\Livewire;

use Livewire\Component;

class StatusUpdate extends Component
{
    public $request;

    public function mount()
    {
        $request = $this->request;
    }

    public function render()
    {
        return view('livewire.status-update');
    }
}
