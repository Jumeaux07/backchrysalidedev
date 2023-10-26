<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    public $menu = "Tableau de bord";

    #[Title('Tableau de bord')]
    public function render()
    {
        return view('livewire.dashboard');
    }
}
