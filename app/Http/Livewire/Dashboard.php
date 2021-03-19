<?php

namespace App\Http\Livewire;

use App\Models\Speedtest;
use Livewire\Component;

class Dashboard extends Component
{

    public function mount()
    {
        $this->speedtest_data = Speedtest::where('status', 'success')->get();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
