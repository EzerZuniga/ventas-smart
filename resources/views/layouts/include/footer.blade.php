<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">
                Copyright &copy; {{ date('Y') }} Ventas Smart. Todos los derechos reservados.
            </div>
            <div>
                <a href="{{ route('legal.privacy') }}">Política de privacidad</a>
                &middot;
                <a href="{{ route('legal.terms') }}">Términos &amp; condiciones</a>
            </div>
        </div>
    </div>
</footer>
