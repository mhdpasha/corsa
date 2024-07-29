<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class SendMessage extends Component
{
    public $requestId, $content;

    protected $rules = [
        'content' => 'required|max:255',
    ];

    public function mount()
    {
        $requestId = $this->requestId;
    }

    public function sendMessage()
    {
        $this->validate();

        $message = Message::create([
            'user_id' => auth()->id(),
            'request_id' => $this->requestId,
            'content' => $this->content,
        ]);

        $this->dispatch('messageSent', $message->id);
        $this->content = '';
    }

    public function render()
    {
        return view('livewire.send-message');
    }
}
