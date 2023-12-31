<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--  <title>{{ config('app.name', 'Agenda Kegiatan Kominfo') }}</title>  --}}
    <title>Dinas Komunikasi dan Informatika Kab Cirebon &#8211; Diskominfo Kab.Cirebon</title>
    <script type="text/javascript">'use strict';var avia_is_mobile=!1;if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)&&'ontouchstart' in document.documentElement){avia_is_mobile=!0;document.documentElement.className+=' avia_mobile '}
        else{document.documentElement.className+=' avia_desktop '};document.documentElement.className+=' js_active ';(function(){var e=['-webkit-','-moz-','-ms-',''],n='';for(var t in e){if(e[t]+'transform' in document.documentElement.style){document.documentElement.className+=' avia_transform ';n=e[t]+'transform'};if(e[t]+'perspective' in document.documentElement.style)document.documentElement.className+=' avia_transform3d '};if(typeof document.getElementsByClassName=='function'&&typeof document.documentElement.getBoundingClientRect=='function'&&avia_is_mobile==!1){if(n&&window.innerHeight>0){setTimeout(function(){var e=0,o={},a=0,t=document.getElementsByClassName('av-parallax'),i=window.pageYOffset||document.documentElement.scrollTop;for(e=0;e<t.length;e++){t[e].style.top='0px';o=t[e].getBoundingClientRect();a=Math.ceil((window.innerHeight+i-o.top)*0.3);t[e].style[n]='translate(0px, '+a+'px)';t[e].style.top='auto';t[e].className+=' enabled-parallax '}},50)}}})();</script><link rel="icon" href="https://diskominfo.cirebonkab.go.id/wp-content/uploads/2021/06/cropped-diskominfo-removebg-preview-1-32x32.png" sizes="32x32" />

    <link rel="icon" href="https://diskominfo.cirebonkab.go.id/wp-content/uploads/2021/06/cropped-diskominfo-removebg-preview-1-192x192.png" sizes="192x192" />


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('adminlte/css/adminlte.min.css') }}">
    <!-- Datatable -->
    {{--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />  --}}
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <style>
        a{color:#007bff;text-decoration:none;background-color:transparent}
      a:hover{color:#0056b3;text-decoration:none}
    button:focus:not(:focus-visible){outline:0}
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased hold-transition sidebar-mini layout-fixed">
    <x-banner />

    <div class="min-h-screen bg-gray-100">

        <!-- Page Heading -->

        <main>
            <div class="wrapper">
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </div>
                    </ul>

                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-200"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </li>
                    </ul>
                </nav>
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                <aside class="main-sidebar main-sidebar-custom sidebar-light-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="/" class="brand-link">
                        <img src="https://diskominfo.cirebonkab.go.id/wp-content/uploads/2021/06/cropped-diskominfo-removebg-preview-1-192x192.png" alt=""
                            class="brand-image " style="opacity: .8">
                        <span class="brand-text font-weight-light">Agenda Kegiatan</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                                <li class="nav-item">
                                    <a href="{{ route('dashboard') }}"
                                        class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
                                        <i
                                            class="nav-icon
                                        fas fa-tachometer-alt"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('events.index') }}"
                                        class="nav-link {{ request()->is('event*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-calendar"></i>
                                        <p>
                                            Event
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('user.index') }}"
                                        class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>
                                            User
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('laporan') }}"
                                        class="nav-link {{ request()->is('laporan*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>
                                            Laporan
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->

                    <div class="sidebar-custom">
                        <div class="block">

                        </div>
                    </div>
                    <!-- /.sidebar-custom -->
                </aside>

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section
                        class="content-header {{ \Route::current()->getname() == 'dashboard' ? 'from-blue-600 to-violet-600 bg-gradient-to-br' : '' }} bg-white shadow-sm">
                        <div class="container-fluid">
                            @if (isset($header))
                                <header>
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        {{ $header }}
                                    </div>
                                </header>
                            @endif
                        </div>
                        <!-- /.container-fluid -->
                    </section>

                    <!-- Main content -->
                    <section class="content">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Default box -->

                                    @if ($message = Session::get('store'))
                                        <div class="alert alert-success fade show mt-4 -mb-5 mx-4" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @elseif ($message = Session::get('update'))
                                        <div class="alert alert-warning fade show mt-4 -mb-5 mx-4" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @elseif ($message = Session::get('delete'))
                                        <div class="alert alert-danger fade show mt-4 -mb-5 mx-4" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                <footer class="main-footer">
                    {{--  PKL SMKN 1 Cirebon Copyrights Reserved © 2023  --}}
                    <strong><a target="_blank" href="https://github.com/niveanyctra/agenda-kominfo"> PKL </a> <a href="https://smkn1-cirebon.sch.id/" target="_blank">SMKN 1 Kota Cirebon</a> Copyright Reserved &copy; 2023</strong>
                </footer>

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->
            </div>

    </div>
    </main>

    @stack('modals')

    @livewireScripts

    <!-- jQuery -->
    {{--  <script src="{{ url('adminlte/plugins/jquery/jquery.min.js') }}"></script>  --}}
    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="{{ url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- overlayScrollbars -->

    <script src="{{ url('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('adminlte/js/adminlte.min.js') }}"></script>
    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'csv','excel', 'pdf','print'
                ]
            } );
            $('#tabel-data').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.8/index.global.min.js'></script>
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script>
        const modal = $('#modal-action')
        const csrfToken = $('meta[name=csrf_token]').attr('content');

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'multiMonthYear,dayGridMonth,listMonth'
            },
            initialView: 'multiMonthYear',
            themeSystem: 'standard',
            events: '{{ route('events.list') }}',
            editable: true,
            dateClick: function (info) {
                $.ajax({
                    url: `{{ route('events.create') }}`,
                    data: {
                        start_date: info.dateStr,
                        end_date: info.dateStr
                    },
                    success: function (res) {
                        modal.html(res).modal('show')
                        $('.datepicker').datepicker();

                        $('#form-action').on('submit', function(e) {
                            e.preventDefault();
                            const form = this
                            const formData = new FormData(form)
                            $.ajax({
                                url: form.action,
                                method: form.method,
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function (res) {
                                    modal.modal('hide')
                                    calendar.refetchEvents()
                                },
                                error: function (res) {

                                }
                            })
                        })
                    }
                })
            },
            eventClick: function ({ event }) {
                $.ajax({
                    url: `{{ url('events') }}/${event.id}/edit`,
                    success: function (res) {
                        modal.html(res).modal('show')

                        $('#form-action').on('submit', function(e) {
                            e.preventDefault();
                            const form = this
                            const formData = new FormData(form)
                            $.ajax({
                                url: form.action,
                                method: form.method,
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function (res) {
                                    modal.modal('hide')
                                    calendar.refetchEvents()
                                }
                            })
                        })
                    }
                })
            },
            eventDrop: function (info){
                const event = info.event
                $.ajax({
                    url: `{{ url('events') }}/${event.id}`,
                    method: 'put',
                    data: {
                        id: event.id,
                        start_date: event.startStr,
                        end_date: event.end.toISOString().substring(0, 10),
                        title: event.title,
                        jam: event.extendedProps.jam,
                        tempat: event.extendedProps.tempat,
                        asal_surat: event.extendedProps.asal_surat,
                        bidang_penanggung_jawab: event.extendedProps.bidang_penanggung_jawab,
                        keterangan: event.extendedProps.keterangan,
                        no_surat: event.extendedProps.no_surat,
                        no_agenda: event.extendedProps.no_agenda,
                        category: event.extendedProps.category
                    },
                    headers: {
                        'X-CSRF-TOKEN' : csrfToken,
                        accept: 'application/json'
                    },
                    success: function (res) {
                        iziToast.success({
                            title: 'Success',
                            message: res.message,
                            position: 'topRight'
                        });
                    },
                    error: function (res) {
                        const message = res.responseJSON.message
                        info.revert()
                        iziToast.error({
                            title: 'Error',
                            message: message ?? 'Something went wrong',
                            position: 'topRight'
                        });
                    }
                })
            },
            eventResize: function (info) {
                const {event} = info
                $.ajax({
                    url: `{{ url('events') }}/${event.id}`,
                    method: 'put',
                    data: {
                        id: event.id,
                        start_date: event.startStr,
                        end_date: event.end.toISOString().substring(0, 10),
                        title: event.title,
                        jam: event.extendedProps.jam,
                        tempat: event.extendedProps.tempat,
                        asal_surat: event.extendedProps.asal_surat,
                        bidang_penanggung_jawab: event.extendedProps.bidang_penanggung_jawab,
                        keterangan: event.extendedProps.keterangan,
                        no_surat: event.extendedProps.no_surat,
                        no_agenda: event.extendedProps.no_agenda,
                        category: event.extendedProps.category
                    },
                    headers: {
                        'X-CSRF-TOKEN' : csrfToken,
                        accept: 'application/json'
                    },
                    success: function (res) {
                        iziToast.success({
                            title: 'Success',
                            message: res.message,
                            position: 'topRight'
                        });
                    },
                    error: function (res) {
                        const message = res.responseJSON.message
                        info.revert()
                        iziToast.error({
                            title: 'Error',
                            message: message ?? 'Something went wrong',
                            position: 'topRight'
                        });
                    }
                })
            }
            });
            calendar.render();
        });

    </script>
</body>

</html>
