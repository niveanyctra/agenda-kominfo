<x-app-layout>
    <x-slot name="header">
        <div class="mt-4 mb-24">
            <div class="row">
                <div class="col-6">
                    <h2 class="font-semibold text-xl text-white leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                    <p class="text-white font-extralight">
                        Administrator Panel
                    </p>
                </div>
                <div class="col-6">
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container px-4 -translate-y-14">
        <div class="bg-white rounded py-7 border border-gray-300 shadow">
            <div class="row px-5">
                <div class="col-8">
                    <div class="flex justify-start items-center h-100">
                        <div>
                            <h2 class="text-gray-700 text-2xl font-extrabold leading-tight mb-2">Selamat Datang
                                <span class="text-blue-600"> {{ Auth::user()->name }}!</span>
                            </h2>
                            <p class="font-semibold text-gray-700">
                                Di Website Agenda Kegiatan KOMINFO Kabupaten Cirebon
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class=" flex items-center justify-center">
                        <img src="{{ url('adminlte/img/undraw_mathematics_-4-otb.svg') }}" class="img-fluid"
                            width="200" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-5 pt-2">
                <form method="get">
                    @csrf
                    <input type="submit" name="prev2"
                            value="2 Tahun Lalu" class="btn btn-sm btn-outline-primary"/>
                    <input type="submit" name="prev"
                            value="Tahun Lalu" class="btn btn-sm btn-outline-primary"/>
                    <input type="submit" name="now"
                            value="Tahun Ini" class="btn btn-sm btn-outline-primary"/>
                    {{--  <input type="submit" name="next"
                            value="Tahun Depan" class="btn btn-sm btn-outline-primary"/>  --}}
                </form>
            </div>
            <div class="col-7 mb-4">

                <p style="font-size:30px; font-weight:bolder">{{ $year }}</p>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">Januari</p>
                        <h3>{{ $januari }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">Februari</p>
                        <h3>{{ $februari }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">Maret</p>
                        <h3>{{ $maret }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">April</p>
                        <h3>{{ $april }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">Mei</p>
                        <h3>{{ $mei }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">Juni</p>
                        <h3>{{ $juni }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">Juli</p>
                        <h3>{{ $juli }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">Agustus</p>
                        <h3>{{ $agustus }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">September</p>
                        <h3>{{ $september }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">Oktober</p>
                        <h3>{{ $oktober }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">November</p>
                        <h3>{{ $november }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <p style="font-weight: bold; font-size:25px">Desember</p>
                        <h3>{{ $desember }}</h3>
                        <p>Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar" style="padding-top:12px"></i>
                    </div>
                </div>
                </div>

        </div>
    </div>
</x-app-layout>
