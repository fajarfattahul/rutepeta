<!DOCTYPE html>
<html>

@include('partials.head')

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        @include('partials.header')

        @include('partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Selamat Datang</h1>
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

        @include('partials.footer')

    </div>
    <!-- ./wrapper -->

@include('partials.script')

</body>
</html>
