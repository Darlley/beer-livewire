<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListaBeer extends Component{
    
    public $item;
    public $lista = ['Naruto', 'Goku', 'Saitama', 'Rengoku'];

    public function render(){
        // return view('livewire.lista-beer', ['nome' => 'Darlley']); as propriedades ja estão "public"
        // return view('livewire.lista-beer', compact(['item', 'lista']));
        return view('livewire.lista-beer');
    }

    public function add(){
        array_unshift($this->lista, $this->item);
        $this->item = '';
    }
}
