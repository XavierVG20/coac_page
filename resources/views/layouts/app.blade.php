<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('htmlheader')
@include('partials.htmlheader_base')
@show

<style>
    /* Ajuste para que el footer siempre esté al final si hay poco contenido */
  
    .main-footer {
        font-size: 0.875rem;
        color: #6c757d;
    }
    .main-footer strong a:hover {
        text-decoration: underline !important;
    }
</style>
<body>
    <div id="app">
    @include('partials.header')
    
            <main class="main-wrapper">
            @include('partials.adnavbar')
            <div class="main-content-wrapper">
            @yield('content')


            </div>

            <footer class="main-footer bg-white border-top p-3 mt-auto">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <strong>Copyright &copy; {{ date('Y') }} 
                    <a href="#" class="text-primary text-decoration-none">Xavier VG</a>.
                </strong>
                <span class="text-muted d-none d-sm-inline-block ms-2">Todos los derechos reservados.</span>
            </div>

            <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                <div class="d-inline-flex align-items-center">
                    <span class="badge bg-success-subtle text-success border border-success-subtle me-3">
                        <i class="fas fa-check-circle me-1"></i> {{ strtoupper(app()->environment()) }}
                    </span>
                    <b class="text-muted me-2">Versión</b> 
                    <span class="badge bg-dark">1.0-stable</span>
                </div>
            </div>
        </div>
    </div>
</footer>
            </main>
    </div>
@include('sweetalert::alert')  


@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Errores de validación',
            html: `
                <ul style="text-align: left;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
        });
    </script>
@endif  
    @stack('js')

</body>




@include('partials.scripts_base')
<script src="https://cdn.jsdelivr.net/npm/jszip@3.10.1/dist/jszip.min.js"></script>
<script src="https://unpkg.com/jszip@3.10.1/dist/jszip.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/autonumeric@4.6.0/dist/autoNumeric.min.js"></script>

<script>
    const autoNumericOptions = {
        digitGroupSeparator: ',',
        decimalCharacter: '.',
        currencySymbol: '$ ',
        currencySymbolPlacement: 'p',
        unformatOnSubmit: true // Ayuda a obtener el valor limpio
    };

    // Inicializar la máscara
    const anElement = new AutoNumeric('#monto_mask', autoNumericOptions);

    // Antes de enviar el formulario, pasa el valor limpio al input oculto
    document.querySelector('form').addEventListener('submit', function() {
        document.querySelector('#monto_real').value = anElement.getNumericString();
    });
</script>

</html>