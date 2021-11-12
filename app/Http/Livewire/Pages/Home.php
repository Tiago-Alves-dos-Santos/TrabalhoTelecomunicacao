<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

//valor aproximado em Km
const CURVATURA_TERRA = 12.76; 
class Home extends Component
{
    //torre 1
    public $altura_torre_um = 0;
    public $alcance_torre_um = 0;
    //torre 2
    public $altura_torre_dois = 0;
    public $alcance_torre_dois = 0;

    //distancia entre as torres
    public $distancia_torres = 0;
    protected $rules = [
        'altura_torre_um' => 'required|numeric',
        'altura_torre_dois' => 'required|numeric',
    ];

    public function mount()
    {
        # code...
    }

    public function alcanceTorres()
    {
        $this->validate();
        $this->alcance_torre_um = sqrt(CURVATURA_TERRA * $this->altura_torre_um);
        $this->alcance_torre_dois = sqrt(CURVATURA_TERRA * $this->altura_torre_dois);
    }

    public function distanciaAntenas()
    {
        $this->validate();
        $this->distancia_torres = $this->alcance_torre_um + $this->alcance_torre_dois;
    }

    public function render()
    {
        return view('livewire.pages.home')
        ->extends('layout.default')
        ->section('componentPage');
    }
}
