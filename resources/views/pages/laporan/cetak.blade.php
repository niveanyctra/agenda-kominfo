<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">  --}}
    <title>Cetak Laporan</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
</head>

<body>
    <div>
        <p align="center"><b>Laporan Agenda Kegiatan</b></p>
        <p style="margin-left: 34px">Pada tanggal {{ $txtTglAwal }} s/d tanggal {{ $txtTglAkhir }}</p>
        <table class="table table-bordered" id="mauexport" align="center" rules="all" border="1px" style="width: 95%;">
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
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv','excel', 'pdf'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</body>

</html>
