<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class TaskControl extends Component
{
    public $request;

    public function update()
    {
        $user = auth()->user();

        if($this->request->status != 'new') {
            return redirect(url("requests/{$this->request->slug}"));
        }

        DB::transaction(function () use ($user) {

            $request = DB::table('incoming_requests')->where('id', $this->request->id)->lockForUpdate()->first();

            $this->request->update([
                'receiver_id' => $user->id,
                'status' => 'accepted',
            ]);

            Message::create([
                'user_id' => $user->id,
                'request_id' => $this->request->id,
                'content' => "SYSTEM: Accepted by {$user->name}",
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
