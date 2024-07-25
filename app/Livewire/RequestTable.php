<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\IncomingRequest;

class RequestTable extends Component
{
    public $datas;

    public function mount()
    {
        $this->fetchData();
    }

    public function fetchData()
    {
        $this->datas =  IncomingRequest::with(['requestor', 'receiver'])
                        ->orderBy('id', 'desc')
                        ->get();
    }

    public function render()
    {
        return view('livewire.request-table', ['datas' => $this->datas]);
    }
}
