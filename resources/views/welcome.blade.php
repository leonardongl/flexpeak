<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FlexPeak</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><i class="fa fa-id-card-o"></i> Cadastre-se</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Flex<b>Peak</b>
                </div>

                <div>
                    <p>
                        <b>Projeto para vaga de Desenvolvedor Jr</b><br/>
                        <b>Nome:</b> Leonardo Augusto Noronha Leão<br/>
                        <b>E-mail:</b> leonardongl@gmail.com<br/>
                        <b>Telefone:</b> (92) 98114-6884
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
