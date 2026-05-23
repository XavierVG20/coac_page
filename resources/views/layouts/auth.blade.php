<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('htmlheader')
@include('partials.htmlheader')
@show
<body>
    <div id="app">
            <main class="py-4">
            @yield('content')
            </main>
    </div>
</body>
@include('partials.scripts')
</html>