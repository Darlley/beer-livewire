<div class="container">
    <div>
        <h1>Lista</h1>
        <input type="text" placeholder="Insira um nome" wire:model="item">
        <button type="submit" wire:click="add">Cadastrar</button>

    </div>
    
    @if($lista)
    <ul>
        @foreach ($lista as $nome)
        <li>
            <span>{{ $nome }}</span>
        </li>
        @endforeach
    </ul>
    <div>
        <button wire:click="clearItem">Limpar</button>
        <button wire:click="resetList">Resetar</button>
    </div>
    @else 
    <p>Lista vazia...</p>
    @endif

</div>