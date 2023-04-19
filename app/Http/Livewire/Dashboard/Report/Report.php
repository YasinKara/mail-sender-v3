<?php

namespace App\Http\Livewire\Dashboard\Report;

use Livewire\Component;
use App\Models\Invoice;

class Report extends Component
{
    public $reports;
    // Data Fetch //
    public function mount()
    {
        $this->reports = Invoice::all();
    }

    public function render()
    {
        return view('livewire.dashboard.report.report')
            ->layout('dashboard._layout.app');
    }
}
