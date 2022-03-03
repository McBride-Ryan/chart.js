<?php

namespace App\Http\Livewire\Reports;

use Livewire\Component;

class ChartZilla extends Component
{
    public string $test = 'Hello from the component!';

    public function render()
    {
        return view('livewire.reports.chart-zilla');
    }
}
