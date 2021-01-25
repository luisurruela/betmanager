<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $createFormModal = false;
    public $match = '';
    public $market = '';
    public $odds = '';
    public $amount = 0;
    public $type = 'Derecha';

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function create()
    {
        $this->createFormModal = true;
    }
}
