<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Home extends Component

{
    public $cep;
    public $profile;

    public function render(){
        return view('livewire.home');
    }

    public function getUser(){
        $response = Http::get("https://api.github.com/users/" . $this->cep);
        // $response = Http::get("viacep.com.br/ws/" . $this->cep . "/json/");
        $this->profile = $response->json();
    }
}
