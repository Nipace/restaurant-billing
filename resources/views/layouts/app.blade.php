<html lang="en">

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Tapari</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    @include('partials.assets.css')
    @include('partials.assets.js')
    @toastr_css
    @livewireStyles

</head>

<body id="kt_body" class="header-fixed header-mobile-fixed sidebar-enabled page-loading">
    @include('partials.topbar.topbarMobile');
    {{-- @include('partials.utils.flash-message') --}}


    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('partials.sidebar.leftSidebar')
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @include('partials.topbar.topbar')
                @yield('content')
            </div>
            {{-- @include('partials.sidebar.rightSidebar') --}}
        </div>
    </div>
    @include('partials.sidebar.userProfileSidebar')
    @include('partials.utils.scrollToTop')
    @include('notify::messages')
    </div>


    @toastr_js
    @toastr_render
    @yield('scripts')
    @livewireScripts



</body>

</html>