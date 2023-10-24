@include('layout.nav')


@yield('content')

@include('layout.footer')

@include('sweetalert::alert')

{{-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) --}}