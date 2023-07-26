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
    <title>Agenda Kegiatan KOMINFO Kab. Cirebon</title>

    <link rel="shortcut icon" href="/adminlte/img/cirebonkab.png" type="image/x-icon">
</head>
<body>
    <nav id="navbar" class="navbar">
        @if (Route::has('login'))
            <div class="row m-2">
                @auth
                    <div class="col-12"><a href="{{ url('/dashboard') }}" class="btn btn-info">Dashboard</a>
                    </div>
                @else
                    <div class="col-12"><a href="{{ route('login') }}" class="btn btn-primary">Log
                            in</a></div>
                @endauth
            </div>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="">Start Date :</label>
                                <p class="start_date card py-2 px-2"></p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="">End Date :</label>
                                <p class="end_date card py-2 px-2"></p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="">Jam :</label>
                                <p class="jam card py-2 px-2"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="title">Kegiatan : </label>
                                <p class="title card py-2 px-2"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="tempat">Tempat : </label>
                                <p class="tempat card py-2 px-2"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="asal_surat">Asal Surat : </label>
                                <p class="asal_surat card py-2 px-2"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="bidang_penanggung_jawab">Bidang Penanggung Jawab : </label>
                                <p class="bpj card py-2 px-2"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="keterangan">Keterangan : </label>
                                <p class="keterangan card py-2 px-2"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="no_surat">No Surat : </label>
                                <p class="no_surat card py-2 px-2"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="no_agenda">No Agenda : </label>
                                <p class="no_agenda card py-2 px-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'multiMonthYear,dayGridMonth,listMonth'
            },
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap5',
            events: '{{ route('events.list') }}',
            editable: true,
            dayMaxEventRows: true,
            views: {
                timeGrid: {
                  dayMaxEventRows: 6 // adjust to 6 only for timeGridWeek/timeGridDay
                }
            },
            eventClick: function(info){
                const {event} = info;
                console.log(event);
                modal.modal('show');
                modal.find('.modal-title').text('Agenda Kegiatan');
                modal.find('.title').text(event.title);
                modal.find('.start_date').text(event.startStr);
                modal.find('.end_date').text(event.end.toISOString().substring(0, 10));
                modal.find('.jam').text(event.extendedProps.jam);
                modal.find('.bpj').text(event.extendedProps.bidang_penanggung_jawab);
                modal.find('.tempat').text(event.extendedProps.tempat);
                modal.find('.asal_surat').text(event.extendedProps.asal_surat);
                modal.find('.no_surat').text(event.extendedProps.no_surat);
                modal.find('.no_agenda').text(event.extendedProps.no_agenda);
                modal.find('.keterangan').text(event.extendedProps.keterangan);
            }
            {{--  eventClick: function ({ event }) {
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
            },  --}}
            });
            calendar.render();
        });

    </script>
</body>
</html>
