<div>
    <h1>Página inicial</h1>
    
    <div class="container-app">
        <div class="">
            <input type="text" placeholder="ID do Github" wire:model="cep" wire:keydown.enter="getUser">

            <div>
                <button class="btn btn-primary" type="button" wire:click.prevent="getUser">
                    <span wire:loading wire:target="getUser" class="visually-hidden"></span>
                    Buscar Github
                </button>
            </div>

            <p>
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
                    max-width: 250px;
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
            </p>
        </div>
    </div>
</div>