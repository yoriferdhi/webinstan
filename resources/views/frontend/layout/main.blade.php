<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.header')
    @include('frontend.layout.meta')
    @include('frontend.layout.css')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="71">

    @if (Request::path() == '/')
        @include('frontend.layout.menu')
    @else
        @include('frontend.layout.menu-url')
    @endif
    
    @yield('content')
	@include('frontend.layout.footer')
    @include('frontend.layout.js')
</body>

</html>