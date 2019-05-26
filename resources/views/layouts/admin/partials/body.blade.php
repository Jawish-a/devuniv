<body id="page-top">
    <div id="wrapper">
        {{-- sidebar --}}
    @include('layouts.admin.partials.sidebar') {{-- content warpper --}}
    @include('layouts.admin.partials.content')
    </div>
    {{-- scroll to top --}}
    <a class="scroll-to-top rounded" href="#page-top" style="display:none;">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('layouts.admin.partials.logout') {{-- JavaScript --}}

    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/sweetalert/dist/sweetalert.min.js')}}"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
    <!-- page custome JS -->
    @yield('pagescript')

</body>