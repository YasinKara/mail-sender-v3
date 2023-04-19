<?php

namespace App\Http\Livewire\Dashboard\Log;

use Livewire\Component;

class Log extends Component
{
    public function render()
    {
        $data = '';
        return view('livewire.log',['data' => $data]);
    }
}
