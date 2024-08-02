<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use App\Models\IncomingRequest;
use Illuminate\Support\Facades\DB;

class TaskControl extends Component
{
    public $request;

    public function update()
    {
        $user = auth()->user();

        if($this->request->status != 'new') {
            return redirect(url("requests/{$this->request->slug}?failQuery=true"));
        }

        DB::transaction(function () use ($user) {

            $request = IncomingRequest::where('id', $this->request->id)
                                      ->lockForUpdate()
                                      ->firstOrFail();

            $request->update([
                'receiver_id' => $user->id,
                'status' => 'accepted',
            ]);

            Message::create([
                'user_id' => $user->id,
                'request_id' => $request->id,
                'content' => "[ SYSTEM ] " . date('d-m-Y H:i:s') . ": Request has been accepted by {$user->name}",
            ]);

            $this->dispatch('render');
        });
    }

    public function mount()
    {
        $request = $this->request;
    }

    public function render()
    {
        return view('livewire.task-control');
    }
}
