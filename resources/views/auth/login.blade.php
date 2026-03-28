<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Inicio de sesión del sistema" />
    <meta name="author" content="Ezer Zuniga" />
    <title>Sistema de ventas - Login</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        :root {
            --login-surface: rgba(255, 255, 255, 0.95);
            --login-border: #c8d3e3;
            --login-text: #2b4b72;
            --login-muted: #4d627f;
            --login-focus: rgba(29, 94, 176, 0.18);
            --login-footer-bg: rgba(0, 0, 0, 0.92);
        }

        body.login-page {
            min-height: 100vh;
            background-color: #1158ca;
            background-image:
                linear-gradient(rgba(9, 35, 84, 0.58), rgba(9, 35, 84, 0.58)),
                url('{{ asset('assets/img/fondohe.jpg') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #layoutAuthentication {
            min-height: 100vh;
        }

        #layoutAuthentication #layoutAuthentication_content {
            padding-block: clamp(1rem, 3vw, 2.5rem);
            display: flex;
            align-items: center;
        }

        #layoutAuthentication #layoutAuthentication_content main {
            width: 100%;
        }

        .login-column {
            max-width: 560px;
        }

        .login-card {
            background-color: var(--login-surface);
            border: 1px solid rgba(255, 255, 255, 0.35);
            border-radius: 1rem;
            overflow: hidden;
        }

        .login-card .card-header {
            background: transparent;
            border-bottom: 1px solid rgba(180, 195, 219, 0.6);
            padding: 1.4rem 1.4rem 1rem;
        }

        .login-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            color: var(--login-muted);
            font-size: 0.86rem;
            margin-bottom: 0.45rem;
        }

        .login-title {
            margin: 0;
            color: var(--login-text);
            font-weight: 700;
            font-size: clamp(1.55rem, 1.2rem + 1.1vw, 2rem);
            line-height: 1.15;
            text-align: center;
        }

        .login-subtitle {
            margin: 0.5rem 0 0;
            text-align: center;
            color: var(--login-muted);
            font-size: 0.96rem;
        }

        .login-card .card-body {
            padding: 1.35rem 1.4rem 1.5rem;
        }

        .login-label {
            color: #2f4f77;
            font-weight: 600;
            font-size: 0.93rem;
            margin-bottom: 0.5rem;
        }

        .login-input-group .input-group-text {
            background-color: #f3f6fb;
            border-color: var(--login-border);
            color: #49658a;
            min-width: 2.8rem;
            justify-content: center;
        }

        .login-input-group .form-control {
            border-color: var(--login-border);
            min-height: 2.8rem;
            transition: none;
        }

        .login-input-group .form-control:focus {
            border-color: #2d67b4;
            box-shadow: 0 0 0 0.2rem var(--login-focus);
        }

        .btn-toggle-password {
            border-color: var(--login-border);
            color: #355577;
            background-color: #f6f8fc;
            min-width: 2.8rem;
            transition: none;
        }

        .btn-login {
            width: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            min-height: 2.9rem;
            font-weight: 600;
        }

        .login-help {
            margin-top: 0.8rem;
            font-size: 0.88rem;
            color: var(--login-muted);
            text-align: center;
        }

        .alert-danger {
            border-color: #f3c5cb;
            background-color: #fff3f5;
            margin-bottom: 1rem;
        }

        #layoutAuthentication_footer .bg-light {
            background-color: var(--login-footer-bg) !important;
            border-top-color: rgba(255, 255, 255, 0.16) !important;
        }

        #layoutAuthentication_footer .text-muted {
            color: rgba(255, 255, 255, 0.72) !important;
        }

        #layoutAuthentication_footer a {
            color: #82b1ff;
        }

        #layoutAuthentication_footer a:hover,
        #layoutAuthentication_footer a:focus {
            color: #aacbff;
        }

        @media (min-width: 992px) {
            body.login-page {
                background-attachment: fixed;
            }
        }

        @media (max-width: 576px) {
            #layoutAuthentication #layoutAuthentication_content {
                padding-block: 0.85rem;
            }

            .login-column {
                max-width: 100%;
                padding-inline: 0.55rem;
            }

            .login-card .card-header,
            .login-card .card-body {
                padding-inline: 1rem;
            }
        }
    </style>
</head>

<body class="login-page">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 login-column">
                            <section class="card shadow-lg border-0 login-card" aria-labelledby="loginTitle">
                                <div class="card-header">
                                    <div class="login-eyebrow">
                                        <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>
                                        <span>Acceso seguro</span>
                                    </div>
                                    <h1 id="loginTitle" class="login-title">Acceso al sistema</h1>
                                    <p class="login-subtitle">Ingresa tus credenciales para continuar.</p>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" role="alert" aria-live="assertive">
                                            <div class="fw-semibold mb-1">No se pudo iniciar sesión</div>
                                            <ul class="mb-0 ps-3">
                                                @foreach ($errors->all() as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form id="loginForm" action="{{ route('login.login') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="inputEmail" class="form-label login-label">Correo electrónico</label>
                                            <div class="input-group login-input-group">
                                                <span class="input-group-text" id="emailIcon">
                                                    <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                                                    <span class="visually-hidden">Correo</span>
                                                </span>
                                                <input autofocus autocomplete="username" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail" type="email" placeholder="nombre@empresa.com" aria-describedby="emailIcon emailHelp" required />
                                            </div>
                                            <div id="emailHelp" class="form-text">Usa el correo registrado en el sistema.</div>
                                            @error('email')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="inputPassword" class="form-label login-label">Contraseña</label>
                                            <div class="input-group login-input-group">
                                                <span class="input-group-text" id="passwordIcon">
                                                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                                                    <span class="visually-hidden">Contraseña</span>
                                                </span>
                                                <input class="form-control @error('password') is-invalid @enderror" name="password" id="inputPassword" type="password" placeholder="Ingresa tu contraseña" autocomplete="current-password" aria-describedby="passwordIcon" required />
                                                <button class="btn btn-toggle-password" type="button" id="togglePassword" aria-label="Mostrar u ocultar contraseña" aria-controls="inputPassword" aria-pressed="false">
                                                    <i class="fa-solid fa-eye" id="togglePasswordIcon" aria-hidden="true"></i>
                                                    <span class="visually-hidden">Mostrar contraseña</span>
                                                </button>
                                            </div>
                                            @error('password')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button class="btn btn-primary btn-login" id="submitButton" type="submit">
                                            <i class="fa-solid fa-right-to-bracket" aria-hidden="true"></i>
                                            Iniciar sesión
                                        </button>
                                    </form>

                                    <p class="login-help mb-0">Si no puedes acceder, contacta al administrador del sistema.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div id="layoutAuthentication_footer">
            <footer class="py-3 bg-light border-top mt-auto">
                <div class="container-fluid px-4">
                    <div class="row gy-2 gx-3 align-items-center small">
                        <div class="col-12 col-md">
                            <p class="mb-0 text-muted">
                                Copyright &copy; {{ date('Y') }} Sistemas de ventas. Todos los derechos reservados.
                            </p>
                        </div>
                        <div class="col-12 col-md-auto">
                            <nav aria-label="Enlaces legales">
                                <ul class="list-inline mb-0 d-flex flex-wrap gap-2 justify-content-md-end">
                                    <li class="list-inline-item mb-0">
                                        <a class="text-decoration-none" href="{{ route('legal.privacy') }}">
                                            Política de privacidad
                                        </a>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted" aria-hidden="true">&middot;</li>
                                    <li class="list-inline-item mb-0">
                                        <a class="text-decoration-none" href="{{ route('legal.terms') }}">
                                            Términos y condiciones
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        const passwordInput = document.getElementById('inputPassword');
        const toggleButton = document.getElementById('togglePassword');
        const toggleIcon = document.getElementById('togglePasswordIcon');
        const loginForm = document.getElementById('loginForm');
        const submitButton = document.getElementById('submitButton');

        if (passwordInput && toggleButton && toggleIcon) {
            toggleButton.addEventListener('click', function() {
                const isVisible = passwordInput.type === 'text';
                passwordInput.type = isVisible ? 'password' : 'text';
                toggleButton.setAttribute('aria-pressed', String(!isVisible));
                toggleIcon.classList.toggle('fa-eye', isVisible);
                toggleIcon.classList.toggle('fa-eye-slash', !isVisible);
            });
        }

        if (loginForm && submitButton) {
            loginForm.addEventListener('submit', function() {
                submitButton.disabled = true;
                submitButton.innerHTML = '<i class="fa-solid fa-hourglass-half" aria-hidden="true"></i> Validando...';
            });
        }
    </script>
</body>

</html>
