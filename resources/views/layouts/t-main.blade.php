<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- link css --}}
    <link rel="stylesheet" href="{{ url('assets/css/tablet/style.min.css') }}">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <title>Karapau</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/t-sobre">SOBRE</a>
                </li>
                <li>
                    <a href="">BLOG</a>
                </li>
                <li>
                    <a href="/t-home">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                </li>

                <li>
                    <a href="t-registrar">REGISTA-TE</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="nav-lateral">
        <ul>
            <li>
                <a href="https://www.linkedin.com/in/karapau-tech-532522212">Linkedin</a>
            </li>
            <li>
                <a href="https://instagram.com/projectokarapau">Instagram</a>
            </li>
            <li>
                <a href="https://www.facebook.com/Karapau-108879244721534/">Facebook</a>
            </li>
            <li>
                <a href="https://api.whatsapp.com/send?phone=351968375553&text=Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20do%20Projeto%20Karapau">Whatsapp</a>
            </li>
        </ul>
    </div>
   
    <div>
        @yield('content')
    </div>
    <div class="container">
        <div class="plataforma-3">
            <div class="text-3">
                <div class="descarregue">
                    <h1>DESCARREGUE NOSSA <br> APLICAÇÃO
                    </h1>
                </div>

                <div class="links">
                    <div class="google-play">
                        <a href="">
                            <img src="assets/img/google-play.png" alt="">
                        </a>
                    </div>
                    <div class="app-store">
                        <a href="">
                            <img src="assets/img/app-store.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pia">
                <img src="assets/img/pia.png" alt="">
            </div>
        </div>
    </div>
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- link js --}}
</body>

</html>
