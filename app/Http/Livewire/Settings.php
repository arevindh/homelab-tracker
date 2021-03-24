<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Settings extends Component
{
    public $page;

    protected $queryString = ['page'];

    public function mount()
    {
        if (!$this->page) {
            $this->page = "general";
        }
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
