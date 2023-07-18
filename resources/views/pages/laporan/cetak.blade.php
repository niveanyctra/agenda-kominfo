<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Laporan Agenda Kegiatan') }}
        </h2>

        <p>Pada tanggal {{ $txtTglAwal }} s/d tanggal {{ $txtTglAkhir }}</p>
    </x-slot>
    <div class="shadow overflow-hidden sm-rounded-md my-5">
        <div class="px-4 py-4 bg-white sm:p-6 ">
        <table class="table table-bordered" id="mauexport" align="center">
            <thead>
                <tr>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Kegiatan</th>
                    <th>Jam</th>
                    <th>Tempat</th>
                    <th>Asal Surat</th>
                    <th>Bidang Penanggung Jawab</th>
                    <th>Keterangan</th>
                    <th>No Surat</th>
                    <th>No Agenda</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporan as $item)
                    <tr align="center">
                        <td>{{ $item->start_date}}</td>
                        <td>{{ $item->end_date}}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->jam }}</td>
                        <td>{{ $item->tempat }}</td>
                        <td>{{ $item->asal_surat }}</td>
                        <td>{{ $item->bidang_penanggung_jawab }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ $item->no_surat }}</td>
                        <td>{{ $item->no_agenda }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</x-app-layout>
