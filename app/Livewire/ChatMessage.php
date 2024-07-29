<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatMessage extends Component
{
    public $messages, $requestId;

    protected $listeners = ['messageSent'];

    public function mount($requestId)
    {
        $this->requestId = $requestId;
        $this->loadMessages();
    }

    public function messageSent($messageId)
    {
        $this->loadMessages();
    }

    public function loadMessages()
    {
        $this->messages = Message::with('user')->where('request_id', $this->requestId)->get();
    }

    public function render()
    {
        return view('livewire.chat-message');
    }
}
