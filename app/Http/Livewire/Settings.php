<?php

namespace App\Http\Livewire;

use App\Models\Settings as ModelsSettings;
use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        return redirect()->route('settings.general');
    }
}
