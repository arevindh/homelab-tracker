<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Settings extends Component
{
    public $page;

    public function mount()
    {
        $this->page = "general";
    }

    public function render()
    {
        return view('livewire.settings');
    }

    public function selectPage(String $page)
    {
        $this->page = $page;
    }
}
