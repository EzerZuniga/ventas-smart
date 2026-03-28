<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Política de privacidad | Ventas Smart</title>
    <meta name="description" content="Política de privacidad de Ventas Smart: cómo recopilamos, usamos y protegemos tus datos personales dentro de la plataforma." />
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Política de privacidad | Ventas Smart" />
    <meta property="og:description" content="Conoce cómo Ventas Smart protege la información de usuarios y clientes." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('assets/img/icon.png') }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Política de privacidad | Ventas Smart" />
    <meta name="twitter:description" content="Detalle del tratamiento y protección de datos en Ventas Smart." />
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
                        <a class="nav-link active" aria-current="page" href="{{ route('legal.privacy') }}">Privacidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('legal.terms') }}">Términos</a>
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
                            <h1 class="text-info fw-semibold mb-2">Política de privacidad</h1>
                            <p class="text-light mb-1">
                                Esta política describe cómo tratamos la información personal cuando utilizas Ventas Smart.
                            </p>
                            <p class="text-light-emphasis mb-0 small">Última actualización: 28 de marzo de 2026.</p>
                        </header>

                        <section class="mb-4">
                            <h2 class="h5 text-info">1. Información que recopilamos</h2>
                            <p class="text-light mb-2">Podemos recopilar datos para operar la plataforma de forma segura y eficiente:</p>
                            <ul class="text-light mb-0">
                                <li>Datos de cuenta: nombre, correo electrónico y rol de usuario.</li>
                                <li>Datos operativos: registros de ventas, compras, inventario y actividad dentro del sistema.</li>
                                <li>Datos técnicos: dirección IP, navegador, dispositivo y eventos de acceso.</li>
                            </ul>
                        </section>

                        <section class="mb-4">
                            <h2 class="h5 text-info">2. Uso de la información</h2>
                            <p class="text-light mb-0">
                                Utilizamos estos datos para autenticar usuarios, mantener la disponibilidad del sistema, generar reportes,
                                prevenir fraudes y mejorar la experiencia de uso.
                            </p>
                        </section>

                        <section class="mb-4">
                            <h2 class="h5 text-info">3. Conservación y seguridad</h2>
                            <p class="text-light mb-0">
                                Aplicamos medidas técnicas y organizativas para proteger la información frente a accesos no autorizados,
                                pérdida o alteración. Conservamos los datos durante el tiempo necesario para fines operativos, legales y de auditoría.
                            </p>
                        </section>

                        <section class="mb-4">
                            <h2 class="h5 text-info">4. Compartición de datos</h2>
                            <p class="text-light mb-0">
                                No vendemos datos personales. Solo compartimos información cuando es necesario para el funcionamiento del servicio,
                                por requerimiento legal o con autorización del titular.
                            </p>
                        </section>

                        <section class="mb-4">
                            <h2 class="h5 text-info">5. Derechos del usuario</h2>
                            <p class="text-light mb-0">
                                Puedes solicitar acceso, corrección o actualización de tus datos personales a través del administrador de la plataforma.
                            </p>
                        </section>

                        <section>
                            <h2 class="h5 text-info">6. Contacto</h2>
                            <p class="text-light mb-0">
                                Para consultas sobre privacidad, contáctanos en
                                <a href="mailto:soporte@ventassmart.com" class="link-info">soporte@ventassmart.com</a>.
                            </p>
                        </section>

                        <div class="d-flex flex-wrap gap-2 mt-4">
                            <a href="{{ route('legal.terms') }}" class="btn btn-outline-info">Ver términos y condiciones</a>
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
