<?php

namespace App\Http\Livewire\Settings;

use App\Models\Settings;
use Livewire\Component;

class General extends Component
{
    protected $setings;

    public function mount()
    {
        $this->settings = Settings::where('type', 'core')->get();
    }

    public function render()
    {
        return view('livewire.settings.general');
    }
}
