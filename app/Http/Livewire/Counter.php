<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $accessHistories = [];

    public function increment()
    {
        $this->count++;
        $this->accessHistories[] = now()->format('Y-m-d H:i:s');
    }

    public function decrement()
    {
        $this->count--;
        $this->accessHistories[] = now()->format('Y-m-d H:i:s');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
