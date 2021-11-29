<div>
    <h1>Página inicial</h1>
    
    <div class="container-app">
        <div class="">
            <input type="text" placeholder="ID do Github" id="user" wire:model="username" wire:keydown.enter="getUser">
            @error('username')
                <span style="color: #ff6262;font-family: monospace;text-transform: capitalize;font-size: 14px;">{{$message}}</span>
            @enderror

            <div>
                <button class="btn btn-primary" type="button" wire:loading.attr="disabled" wire:click.prevent="getUser">
                    <div style="display: flex; align-items: center;">
                        <div class="spinner-border" role="status" wire:loading wire:target="getUser" style="width: 1rem !important; height: 1rem !important;">
                            <span class="visually-hidden"></span>
                        </div>
                        Buscar Github
                    </div>
                </button>
            </div>

            @if ($profile)
            <div class="carde">
                <div class="container-profile">
                    <img src="{{ $profile['avatar_url'] }}" alt="{{ $profile['name'] }}">
                    <h2>/{{ $profile["name"] }}</h2>
                </div>
                <div class="container-text">
                    <p>{{ $profile['bio'] }}</p>
                </div>
                <div class="container-link">
                    <div>
                        <a href="{{ $profile['html_url'] }}" target="_blank">
                            <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Ícone do Github">
                        </a>
                    </div>
                </div>
            </div>

            <style>
                .carde{
                    display: flex;
                    flex-direction: column;
                    max-width: max-content;
                    margin: 0 auto;
                    background-color: #131313;
                    border-radius: 8px;
                    font-family: sans-serif;
                    padding: 2rem;
                    color: #fff;
                    box-shadow: 5px 5px 15px #13131370;

                }
                .carde:hover{
                    animation: carde ease-in-out 2s;
                }
                .container-profile{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .container-profile img{
                    width: 100px;
                    border-radius: 50%;
                    margin-right: 1rem;
                }

                .container-link{
                    display: flex;
                    justify-content: center;
                    text-decoration: none;
                    color: #fff;
                }
                .container-link a{
                    display: inline-block;
                    border-radius: 50%;
                    background-color: #fff;
                    padding: .5rem;
                }
                .container-link a img{
                    width: 20px;
                }

                @keyframes carde{
                    0%{
                        transform: rotateY(0deg);
                    }
                    50%{
                        transform: rotateY(180deg);
                        background-color: #1f1f1f;
                    }
                    100%{
                        transform: rotateY(360deg);
                    }

                }
            </style>
            @endif
        </div>
    </div>
</div>