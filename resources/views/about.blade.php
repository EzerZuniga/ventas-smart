<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Acerca de | Ventas Smart</title>
    <meta name="description" content="Conoce Ventas Smart: plataforma para gestionar ventas, compras, inventario y clientes desde un solo sistema web." />
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Acerca de | Ventas Smart" />
    <meta property="og:description" content="Sistema web para optimizar la operación comercial de pequeños y medianos negocios." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('assets/img/icon.png') }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Acerca de | Ventas Smart" />
    <meta name="twitter:description" content="Gestiona ventas, compras, inventario y clientes en una sola plataforma." />
    <meta name="twitter:image" content="{{ asset('assets/img/icon.png') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-body-secondary sticky-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('panel') }}">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Sistema de venta
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('panel') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('about.index') }}">Acerca de</a>
                    </li>
                </ul>

                <form class="d-flex" action="{{ route('login.index') }}" method="get">
                    <button class="btn btn-primary d-flex align-items-center justify-content-center gap-2" type="submit" aria-label="Iniciar sesión" title="Iniciar sesión">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" aria-hidden="true">
                            <circle cx="8" cy="5" r="3" fill="none" stroke="currentColor" stroke-width="1.6" />
                            <path d="M2 14c0-2.5 2.2-4.5 6-4.5s6 2 6 4.5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                        </svg>
                        <span class="d-none d-sm-inline">Iniciar sesión</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <section class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 bg-body-secondary">
                    <div class="card-body p-4 p-md-5">
                        <h1 class="text-info fw-semibold mb-3">Acerca de Ventas Smart</h1>
                        <p class="text-light mb-4">
                            Ventas Smart es una solución web diseñada para centralizar procesos comerciales:
                            ventas, compras, inventario, clientes y reportes, en una interfaz clara y práctica.
                        </p>

                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="p-3 rounded border border-info-subtle h-100">
                                    <h2 class="h6 text-info mb-2">Gestión Centralizada</h2>
                                    <p class="mb-0 text-light">Toda la operación del negocio en un solo sistema confiable.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded border border-info-subtle h-100">
                                    <h2 class="h6 text-info mb-2">Eficiencia Operativa</h2>
                                    <p class="mb-0 text-light">Menos tareas manuales y menos errores en el día a día.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded border border-info-subtle h-100">
                                    <h2 class="h6 text-info mb-2">Visión del Negocio</h2>
                                    <p class="mb-0 text-light">Datos y reportes para tomar decisiones con mayor seguridad.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('login.index') }}" class="btn btn-primary">Ir al sistema</a>
                            <a href="{{ route('panel') }}" class="btn btn-outline-light">Volver al inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ezerzuniga.oficial16/" role="button" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003z" />
                    </svg>
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/ezer-benito-zu%C3%B1iga-chura-721145387" role="button" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/EzerZuniga" role="button" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © {{ date('Y') }} Ventas Smart. Todos los derechos reservados.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
