<div class="container">
    <div>
        <h1>Lista</h1>
        <input type="text" placeholder="Insira um nome" wire:model="item">
        <button wire:click="add">Cadastrar</button>
    </div>
    
    @if($lista)
    <ol>
        @foreach ($lista as $key => $nome)
        <li>
            <span>
                {{ $nome }}
                <button wire:click="deleteItem({{ $key }})">Delete</button>
                array[{{ $key }}]
            </span>
        </li>
        @endforeach
    </ol>
    <div>
        <button wire:click="clearFirst">Limpar</button>
        <button wire:click="resetList">Resetar</button>
    </div>
    <p>{{ var_dump($lista) }}</p>

    @else 
    <p>Lista vazia...</p>
    @endif

</div>