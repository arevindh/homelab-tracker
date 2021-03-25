<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;

class NavBar extends Component
{
    public $page;
    public function mount($page)
    {
        $this->page = $page;
    }

    public function render()
    {
        return view('livewire.settings.nav-bar');
    }
}
