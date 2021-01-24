<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $showCreateModal = false;

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function create()
    {
        $this->showCreateModal = true;
    }
}
