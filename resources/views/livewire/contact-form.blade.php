<div class="container-lg">

    <form class="row g-3" wire:submit.prevent="submitForm">
        <div class="mb-3 col-md-6">
            <label for="name" class="form-label">Nome completo</label>
            <input type="text" id="name" class="form-control" aria-describedby="nameHelp" wire:model="name" placeholder="Escreva seu nome">
            @error('name')<span style="color: #dc3545;">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3 col-md-6">
            <label for="mail" class="form-label">Endereço de email</label>
            <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" wire:model="email" placeholder="Escreva seu email">
            @error('email')<span style="color: #dc3545;">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-12">
            <textarea style="width: 100%; border-radius: 6px; height: 200px; padding: 1rem;" wire:model="message" placeholder="Sua mensagem"></textarea>
            @error('message')<span style="color: #dc3545;">{{ $message }}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="submitForm">
            <div class="spinner-border spinner-border-sm" role="status" wire:loading wire:target="submitForm">
                <span class="visually-hidden">Loading...</span>
            </div>
            Enviar mensagem
        </button>

        @if ($sucessMessage)
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
        </svg>
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div wire:click="$set('sucessMessage', null)">
            {!! $sucessMessage; !!} (Clique em mim)
            </div>
        </div>
        @endif
    </form>
</div>