@extends('plantilla')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ElectroAcc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tienda">Tiendas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/accesorios">Accesorios</a></li>
                            <li><a class="dropdown-item" href="/audio">Audio</a></li>
                            <li><a class="dropdown-item" href="/computo">Computo</a></li>
                            <li><a class="dropdown-item" href="/consumibles">Consumibles</a></li>
                            <li><a class="dropdown-item" href="/celulares">Celulares</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/soporte">Soporte</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="¿Algo en especial?" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Consumibles</li>
        </ol>
    </nav>
</header>

<body>
    <div class="container">
        <h3>Secciones principales</h3>
        <div class="list-group list-group-light">
            <a href="/accesorios" class="list-group-item list-group-item-action px-3 border-0">Accesorios</a>
            <a href="/audio" class="list-group-item list-group-item-action px-3 border-0">Audio</a>
            <a href="/celulares" class="list-group-item list-group-item-action px-3 border-0">Celulares</a>
            <a href="/computo" class="list-group-item list-group-item-action px-3 border-0">Computo</a>
            <a href="/consumibles" class="list-group-item list-group-item-action px-3 border-0">Consumibles</a>
        </div>
        <h3>Secciones secundarias</h3>
        <div class="list-group list-group-light">
            <a href="/escritorio" class="list-group-item list-group-item-action px-3 border-0">Escritoro</a>
            <a href="/portatil" class="list-group-item list-group-item-action px-3 border-0">Portatil</a>
            <a href="/servidor" class="list-group-item list-group-item-action px-3 border-0">Servidor</a>
            <a href="/tablets" class="list-group-item list-group-item-action px-3 border-0">Tablets</a>
        </div>
    </div>

</body>

</html>
@endsection