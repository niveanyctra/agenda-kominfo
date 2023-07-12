<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
    <title>Document</title>
</head>
<body>
    <nav id="navbar" class="navbar">
        @if (Route::has('login'))
            <div class="row m-2">
                @auth
                    <div class="col-12"><a href="{{ url('/dashboard') }}" class="btn btn-info">Dashboard</a>
                    </div>
                @else
                    <div class="col-6"><a href="{{ route('login') }}" class="btn btn-primary">Log
                            in</a></div>

                    @if (Route::has('register'))
                        <div class="col-6"><a href="{{ route('register') }}" class="btn btn-success">Register</a>
                        </div>
                    @endif
                @endauth
            </div>
            <i class="bi bi-list mobile-nav-toggle"></i>
        @endif
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
    <div id="modal-action1" class="modal" tabindex="-1">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.8/index.global.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script>
        const modal = $('#modal-action1')
        const csrfToken = $('meta[name=csrf_token]').attr('content');

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap5',
            events: '{{ route('events.list') }}',
            editable: true,
            eventClick: function ({ event }) {
                $.ajax({
                    url: `{{ url('events') }}/${event.id}/detail`,
                    success: function (res) {
                        modal.html(res).modal('show')

                        $('#form-action1').on('submit', function(e) {
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
            });
            calendar.render();
        });

    </script>
</body>
</html>
