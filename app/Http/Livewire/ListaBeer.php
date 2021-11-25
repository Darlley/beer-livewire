<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListaBeer extends Component{
    
    // Cadastrar
    public $item;
    public $lista = ['Naruto', 'Goku', 'Saitama', 'Rengoku'];
    
    // Editar
    public $atualizar = false;
    public $key;

    public function render(){
        // return view('livewire.lista-beer', ['nome' => 'Darlley']); as propriedades ja estão "public"
        // return view('livewire.lista-beer', compact(['item', 'lista']));
        return view('livewire.lista-beer');
    }

    public function add(){
        array_unshift($this->lista, $this->item);
        $this->item = '';
    }

    public function clearFirst(){
        array_shift($this->lista); // Limpar o primeiro
        // array_pop($this->lista); // Limpar o ultimo
    }
    public function resetList(){
        $this->lista = []; // limpar tudo
    }
    public function deleteItem(int $key){
        unset($this->lista[$key]);
    }

    public function editItem(int $key){
        $this->atualizar = true;
        $this->key = $key;
        $this->item = $this->lista[$key];
    }
    public function att(){
        $this->lista[$this->key] = $this->item;
        
        // $this->lista = array_replace($this->lista, [
        //     $this->key => $this->item
        // ]);

        $this->item = "";
        $this->atualizar = false;
    }
}