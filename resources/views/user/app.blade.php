@include('user.layouts.head')
@yield('css')
</head>
<body>

<div class="page">
    @include('user.layouts.menu')
    <div class="page-wrapper">
        @yield('main')
    </div>
</div>


@include('user.layouts.footer')