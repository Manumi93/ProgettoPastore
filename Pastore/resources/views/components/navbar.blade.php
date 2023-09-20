<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
    <div class="container ">
        <!-- <a class="navbar-brand" href="#">
            <img class="logo" src="./immagini/logoPastore.png" alt="">
        </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse justify-content-center " id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item anim me-5">
                    <a class="nav-link " href="{{route('homepage')}}"><b>Home</b></a>
                </li>
                <li class="nav-item anim me-5">
                    <a class="nav-link " href="{{route('about')}}"><b>Chi siamo</b></a>
                </li>
                <li class="nav-item anim me-5">
                    <a class="nav-link " href="{{route('service')}}"><b>I nostri servizi</b></a>
                </li>
                <li class="nav-item anim me-5">
                    <a class="nav-link " href="{{route('preventivo')}}"><b>Richiedi un preventivo</b></a>
                </li>
                <li class="nav-item anim me-5">
                    <a class="nav-link " href="{{route('contact')}}"><b>Contatti</b></a>
                </li>
            </ul>
        </div>
</nav>
<!-- fine navbar -->