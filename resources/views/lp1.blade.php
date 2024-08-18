<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <center>
        <h3 style="padding-top: 40px;padding-bottom: 40px">LAPORAN DATA TEMPLATE ROSE</h3>
    </center>
    <center>
    <table border="1" cellspacing="0" cellpadding="0" width="100%" style="text-align: center;">
        <tr >
            <td style="padding-top: 10px;font-weight: bold">No</td>
            <td style="font-weight: bold">Nama</td>
            <td style="font-weight: bold">Template</td>
            <td style="font-weight: bold">Tanggal</td>
        </tr>
        @php
            $no=1;
        @endphp
        @foreach($tes as $tess)
        <tr>
            <td style="padding-top: 10px">{{$no++}}</td>
            <td>{{$tess->nama_221040}}</td>
            <td>{{$tess->ket_221040}}</td>
            <td>{{$tess->tanggal_221040}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3" style="padding-top: 10px;font-weight: bold">Total Data</td>
            <td style="font-weight: bold">{{ $total }}</td>
        </tr>
    </table>
</center>
</body>
</html>