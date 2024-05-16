<?php

namespace App\Livewire;

use App\Events\SendMessage;
use App\Listeners\SendMessageNotification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class RealtimeMessage extends Component
{
    use LivewireAlert;

    public string $message;

    public $event;

    public function triggerEvent():void
    {
        $this->event = SendMessage::dispatch($this->message);
    }

    #[On('echo:my-channel,SendMessage')]
    public function handleMessage($data):void
    {
        $this->alert('success', $data['message']);
    }

    public function render()
    {
        return view('livewire.realtime-message');
    }
}
