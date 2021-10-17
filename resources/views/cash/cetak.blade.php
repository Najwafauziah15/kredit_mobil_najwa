<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pembayaran Cash</title>

    {{-- <style>
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .gray {
            background-color: lightgray
        }
    </style> --}}

</head>

<body>

    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
        center {
            font-family: sans-serif;
            align-content: center;

        }
    </style>
    <div class="card-header">
        <H4>Faktur Cash</H4>
    </div>
    <div class="center">
        <table class="table table-hover">
            <thead>
                <th>No.</th>
                {{-- <th>Kode Pembayaran</th> --}}
                <th>KTP Pembeli</th>
                <th>Kode Mobil</th>
                <th>Cash Bayar</th>
                <th>Cash Tanggal</th>
                <th>Pilih</th>
            </thead>
            <br>
            <tbody>
                @foreach ($beli_cash as $m)
                <tr>
                <td>{{ $j=(isset($j)?++$j:$j=1) }}</td>
                <td>{{ $m->kode_cash }}</td>
                <td>{{ $m->ktp_pembeli }}</td>
                <td>{{ $m->kode_mobil }}</td>
                <td>{{ $m->cash_bayar }}</td>
                <td>{{ $m->cash_tgl }}</td>
                <td><button class="btn btn-secondary" class="pilih-cash">Pilih</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>