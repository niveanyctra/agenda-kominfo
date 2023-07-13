<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">  --}}
    <title>Cetak Laporan</title>
</head>

<body>
    <div>
        <p align="center"><b>Laporan Agenda Kegiatan</b></p>
        <p style="margin-left: 34px">Pada tanggal {{ $txtTglAwal }} s/d tanggal {{ $txtTglAkhir }}</p>
        <table class="table table-bordered" align="center" rules="all" border="1px" style="width: 95%;">
            <thead>
                <tr>
                    <th width="30px">ID</th>
                    <th width="80px">Start Date</th>
                    <th width="80px">End Date</th>
                    <th width="300px">Kegiatan</th>
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
                        <th>{{ $loop->iteration }}</th>
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
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
