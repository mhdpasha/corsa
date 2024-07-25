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
        $this->datas = IncomingRequest::with(['requestor:id,name', 'receiver:id,name'])
                        ->orderBy('id', 'desc')
                        ->where('status', '!=', 'cleared')
                        ->get(['id', 'requestor_id', 'receiver_id', 'type', 'location', 'title', 'picture', 'status', 'created_at', 'slug']);
    }

    public function render()
    {
        return view('livewire.request-table', ['datas' => $this->datas]);
    }
}
