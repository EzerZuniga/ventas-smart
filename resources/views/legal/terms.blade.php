<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Términos y condiciones | Ventas Smart</title>
    <meta name="description" content="Términos y condiciones de uso de Ventas Smart para la gestión de ventas, inventario, compras y clientes." />
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Términos y condiciones | Ventas Smart" />
    <meta property="og:description" content="Reglas de uso, responsabilidades y condiciones del servicio de Ventas Smart." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('assets/img/icon.png') }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Términos y condiciones | Ventas Smart" />
    <meta name="twitter:description" content="Consulta las condiciones que regulan el uso de Ventas Smart." />
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
                        <a class="nav-link" href="{{ route('about.index') }}">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('legal.privacy') }}">Privacidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('legal.terms') }}">Términos</a>
                    </li>
                </ul>

                <a class="btn btn-primary" href="{{ route('login.index') }}">Iniciar sesión</a>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <section class="row justify-content-center">
            <div class="col-lg-10">
                <article class="card border-0 bg-body-secondary">
                    <div class="card-body p-4 p-md-5">
                        <header class="mb-4">
                            <h1 class="text-info fw-semibold mb-2">Términos y condiciones</h1>
                            <p class="text-light mb-1">
                                Estos términos regulan el uso de la plataforma Ventas Smart.
                            </p>
                            <p class="text-light-emphasis mb-0 small">Última actualización: 28 de marzo de 2026.</p>
                        </header>

                        <section class="mb-4">
                            <h2 class="h5 text-info">1. Aceptación de términos</h2>
                            <p class="text-light mb-0">
                                Al acceder y utilizar el sistema, aceptas cumplir estas condiciones y la normativa aplicable.
                            </p>
                        </section>

                        <section class="mb-4">
                            <h2 class="h5 text-info">2. Uso permitido</h2>
                            <p class="text-light mb-2">El uso de la plataforma debe estar orientado a actividades comerciales legítimas.</p>
                            <ul class="text-light mb-0">
                                <li>No está permitido manipular datos de forma fraudulenta.</li>
                                <li>No se permite compartir cuentas con terceros no autorizados.</li>
                                <li>Debe respetarse la integridad de la información registrada.</li>
                            </ul>
                        </section>

                        <section class="mb-4">
                            <h2 class="h5 text-info">3. Responsabilidad de cuentas</h2>
                            <p class="text-light mb-0">
                                Cada usuario es responsable de mantener la confidencialidad de sus credenciales y de las acciones realizadas desde su cuenta.
                            </p>
                        </section>

                        <section class="mb-4">
                            <h2 class="h5 text-info">4. Disponibilidad del servicio</h2>
                            <p class="text-light mb-0">
                                Trabajamos para mantener la continuidad operativa del sistema, pero pueden existir interrupciones por mantenimiento,
                                actualizaciones o incidencias técnicas.
                            </p>
                        </section>

                        <section class="mb-4">
                            <h2 class="h5 text-info">5. Limitación de responsabilidad</h2>
                            <p class="text-light mb-0">
                                Ventas Smart no será responsable por pérdidas indirectas derivadas del uso inadecuado del sistema o de eventos externos fuera de control razonable.
                            </p>
                        </section>

                        <section class="mb-4">
                            <h2 class="h5 text-info">6. Cambios en los términos</h2>
                            <p class="text-light mb-0">
                                Estos términos pueden actualizarse para reflejar mejoras del servicio o cambios legales. Las versiones actualizadas se publicarán en esta página.
                            </p>
                        </section>

                        <section>
                            <h2 class="h5 text-info">7. Contacto</h2>
                            <p class="text-light mb-0">
                                Si tienes dudas sobre estos términos, escríbenos a
                                <a href="mailto:soporte@ventassmart.com" class="link-info">soporte@ventassmart.com</a>.
                            </p>
                        </section>

                        <div class="d-flex flex-wrap gap-2 mt-4">
                            <a href="{{ route('legal.privacy') }}" class="btn btn-outline-info">Ver política de privacidad</a>
                            <a href="{{ route('login.index') }}" class="btn btn-primary">Volver al login</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <footer class="text-center text-white">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © {{ date('Y') }} Ventas Smart. Todos los derechos reservados.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
