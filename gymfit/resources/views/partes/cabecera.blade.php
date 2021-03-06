<header class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-md-4 d-md-block d-none my-4">
            <img class="logotipo" src="{{asset('img/logo.png')}}" alt="Logo Página">
        </div>
        <div class="my-md-4 col-md-6 d-md-block d-none search">
            <form class="form-inline">
                <input class="form-control mr-2 w-50" type="text" placeholder="Buscar producto" aria-label="Buscar">
                <button class="btn btn-outline-success my-2" type="submit">Buscar</button>
            </form>
        </div>
        <div class="d-none d-md-block col-md-2 mt-5">
            <img class="svgTamanyo mr-md-2 mr-lg-5" src="{{asset('img/user.svg')}}" alt="Control Usuario">
            <img class="svgTamanyo" src="{{asset('img/carritoCompra.svg')}}" alt="Carrito de la Compra">
        </div>
        <div class="d-block d-md-none col-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <img class="logoTipoMovil" src="{{asset('img/logo.png')}}" alt="Logo Página">
                    </div>
                    <div class="col-6">
                        <img class="svgTamanyo iconosMovil ml-5" src="{{asset('img/user.svg')}}" alt="Control Usuario">
                        <img class="svgTamanyo iconosMovil ml-4" src="{{asset('img/carritoCompra.svg')}}" alt="Carrito de la Compra">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".opciones">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- enlaces --> 
    <ul class="collapse navbar-collapse navbar-nav opciones">
        <li class="nav-item">
            <a class="nav-link" href="#">Ropa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Maquinas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Accesorios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Administrar Pagina</a>
        </li>
    </ul>
    <div class="d-md-none d-block">
        <form class="form-inline">
            <input class="form-control mr-sm-2 w-50" type="text" placeholder="Buscar producto" aria-label="Buscar">
            <button class="btn btn-outline-success ml-3 my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>