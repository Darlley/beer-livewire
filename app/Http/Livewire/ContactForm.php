<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $sucessMessage;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10'
    ];
    protected $messages = [
        'name.required' => 'Nome obrigatório!',
        'name.min' => 'Informe um nome com no mínimo 3 caracteres (ex. Bob).',
        'email.required' => 'Campo de e-mail não preenchido!',
        'email.email' => 'Campo de e-mail não preenchido corretamente. (example@mail.com)',
        'message.required' => 'Mensagem obrigatória!',
        'message.min' => 'Mensagem muito curta (mínimo 10 caracteres).',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function submitForm(){
        sleep(2);
        $validateData = $this->validate();

        // Regras de negócio

        // $this->resetForm(); a mão
        // $this->reset(); padrão do sistema mas tudo
        $this->reset(['name', 'email', 'message']); // Padrão do sistema mas alguns

        $this->sucessMessage = "Parabéns <strong>{$validateData['name']}</strong>, sua mensagem foi enviada! Agradecemos o contato :)";
    }
    /* private function resetForm(){
        $this->name = '';
        $this->email = '';
        $this->message = '';
    } */
}
