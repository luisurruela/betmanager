<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bets;

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

    public function mount()
    {

    }
    
    /**
     * Save new bet in database
     *
     * @return void
     */
    public function store()
    {
        Bets::create([
            'user_id'       => auth()->user()->id,
            'match'         => $this->match,
            'market'        => $this->market,
            'odds'          => $this->odds,
            'type'          => $this->type,
            'amount'        => $this->amount
        ]);
    }
}
