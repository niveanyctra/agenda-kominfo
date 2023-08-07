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
    <nav id="navbar" class="navbar bg-primary">
        @if (Route::has('login'))
            <div class="container">
                    <div class="d-flex">
                    <img src="adminlte/img/cirebonkab.png" alt="Logo" width="50" height="50" class="d-inline-block me-3 align-text-center">
                        <h3 class="header nav-brand mt-1 text-white">Agenda Kominfo Kab. Cirebon</h3>
                    </div>
                @auth
                    <div class="ps-5"><a href="{{ url('/dashboard') }}" class="btn btn-info">Dashboard</a>
                    </div>
                @else
                    <div class="ps-5"><a href="{{ route('login') }}" class="btn btn-success">Log
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
    <div class="row bg-primary">
            <div class="col-4 ms-4">
                <img class="ms-3 my-4" src="/adminlte/img/footerkominfo.png">

                <div class="ms-3 fs-6 fw-light-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg>
                    Alamat : Jl. Sunan Drajat No.15, Sumber,<Br> <div class="ms-3">Kec. Sumber,Cirebon, Jawa Barat 45611</div></div>
                <div class="ms-3 mt-3 fs-6 fw-light-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
                    Telepon : (0231) 8330580</div>
            </div>
            <div class="col-3"></div>
            <div class="col-4">
                <h5 class="ms-3 mt-4">PETA LOKASI</h5>
                <iframe class="py-2 ms-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1175.0986719190741!2d108.47638729635923!3d-6.761425228544251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1e52319b27c1%3A0xb2df85a13850e781!2sDiskominfo%20Kabupaten%20Cirebon!5e0!3m2!1sid!2sid!4v1691379479344!5m2!1sid!2sid" width="300" height="200"></iframe>
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
