@include('.layouts.panel.header')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('.layouts.panel.navbar')

@include('.layouts.panel.main-sidebar-menu')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @include('.layouts.panel.content-header')
    <!-- Main content -->
        <div class="content" id="app">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('.layouts.panel.control-sidebar')

    @include('.layouts.panel.footer')
</div>
<!-- ./wrapper -->

