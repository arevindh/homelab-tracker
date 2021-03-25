<?php

namespace App\Http\Livewire;

use App\Models\Settings as ModelsSettings;
use Livewire\Component;

class Settings extends Component
{
    public $page;
    public $core;
    public $speedtest;

    protected $queryString = ['page'];

    public function mount()
    {
        if (!$this->page) {
            $this->page = "general";
        }

        $this->core = ModelsSettings::where('type','core')->get();
        $this->speedtest = ModelsSettings::where('type','speedtest')->get();
    }

    public function render()
    {
        return view('livewire.settings');
    }

    public function selectPage(String $page)
    {
        $this->page = $page;
        $this->emit('pageChange', $page);
    }
}
