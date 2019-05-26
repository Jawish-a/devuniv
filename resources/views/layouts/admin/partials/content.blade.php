<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
    @include('layouts.admin.partials.nav')

        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">
                @yield('title')
            </h1>{{-- page title should be here --}} {{-- page content should be here --}} @yield('content')

        </div>
    </div>
    @include('layouts.admin.partials.footer')
</div>