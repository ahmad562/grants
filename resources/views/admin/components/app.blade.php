<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Grants">
    <meta name="keywords" content="Grants">
    <title>{{ !empty($title) ? $title : '' }} - Dental Lab</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/admin/img/dental-favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/font-awesome.min.css') }}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/line-awesome.min.css') }}">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/plugins/morris/morris.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/dataTables.bootstrap4.min.css') }}">

    <!-- Summer Note CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/plugins/summernote/dist/summernote-bs4.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/css/style.css') }}">
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        @include('admin.components.header')
        <!-- /Header -->

        <!-- Sidebar -->
        @include('admin.components.sidebar')
        <!-- /Sidebar -->

        {{-- Main Content --}}
        @yield('content')
        {{-- End Main Content --}}

    </div>
    <!-- /Main Wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('public/assets/admin/js/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('public/assets/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('public/assets/admin/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('public/assets/admin/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/js/chart.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('public/assets/admin/js/select2.min.js') }}"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ asset('public/assets/admin/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Tagsinput JS -->
    <script src="{{ asset('public/assets/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

    <!-- Datatable JS -->
    <script src="{{ asset('public/assets/admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/admin/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Summernote JS -->
    <script src="{{ asset('public/assets/admin/plugins/summernote/dist/summernote-bs4.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('public/assets/admin/js/app.js') }}"></script>
    @yield('CustomJS')

    <script>
        $(function() {
            $('.editor').summernote({})
        })
        document.getElementById('toggle_btn').addEventListener('click', function() {
            document.body.classList.toggle('sidebar-toggled');
        });

        $(document).ready(function() {
            $('.data-table').DataTable();
        });
    </script>

</body>

</html>
