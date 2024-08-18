<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV</title>
    <style>
        *,
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td colspan="3" style="text-align: center;font-weight: bold;font-size: 30px;padding-top: 40px">CURRICULUM
                VITAE</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            <td width="35%" rowspan="12"><img src="{{ public_path('gambar/' . $bio->foto_221040) }}" alt=""
                    width="250px"></td>
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td width="30%" style="padding-left: 60px;font-size: 18px">Nama</td>
            <td width="3%">:</td>
            <td style="font-size: 18px" width="35%">{{ $bio->nama_221040 }}</td>
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 60px;font-size: 18px">Tempat/Tanggal Lahir</td>
            <td>:</td>
            <td style="font-size: 18px">{{ $bio->tempatlahir_221040 }},{{ $bio->ttl_221040 }}</td>
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}

        </tr>
        <tr>
            <td style="padding-left: 60px;font-size: 18px">Alamat</td>
            <td>:</td>
            <td style="font-size: 18px">{{ $bio->alamat_221040 }}</td>
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 60px;font-size: 18px">No Telp/Hp</td>
            <td>:</td>
            <td style="font-size: 18px">{{ $bio->nohp_221040 }}</td>
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 60px;font-size: 18px">Email</td>
            <td>:</td>
            <td style="font-size: 18px">{{ $bio->email_221040 }}</td>
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 60px;font-size: 18px">Facebook</td>
            <td>:</td>
            <td style="font-size: 18px">{{ $bio->fb_221040 }}</td>
            <td rowspan="2" style="font-weight: bold;font-size: 25px;text-align: center">TENTANG SAYA</td>
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 60px;font-size: 18px">Instagram</td>
            <td>:</td>
            <td style="font-size: 18px">{{ $bio->ig_221040 }}</td>
            <td style="color: white">4</td>
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            <td rowspan="9" style="text-align: center; padding-right: 10px;font-size: 18px">
                {{ $bio->tentang_221040 }}</td>
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold;font-size: 25px;text-align: center">RIWAYAT PENDIDIKAN</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 60px;font-size: 18px" colspan="3" rowspan="7">
                @forelse ($pend -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $p)
                    {{ $p->tahunmasuk_pendidikan_221040 }}-{{ $p->tahunkeluar_pendidikan_221040 }}
                    <b style="color: white">...</b>
                    {{ $p->pendidikan_221040 }} <br><br>
                @empty
                    Tidak ada pendidikan
                @endforelse
            </td>
            {{-- <td colspan="2" style="font-size: 18px">pd1</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td colspan="3" style="color: white">1</td> --}}
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td style="padding-left: 60px;font-size: 18px">22-22</td> --}}
            {{-- <td colspan="2" style="font-size: 18px">pd2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td colspan="3" style="color: white">1</td> --}}
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td style="padding-left: 60px;font-size: 18px">33-33</td> --}}
            {{-- <td colspan="2" style="font-size: 18px">pd3</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td colspan="3" style="color: white">1</td> --}}
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            <td rowspan="20" style="color: white">4</td>
        </tr>
        <tr>
            {{-- <td style="padding-left: 60px;font-size: 18px">44-44</td> --}}
            {{-- <td colspan="2" style="font-size: 18px">pd4</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold;font-size: 25px;text-align: center">PENGALAMAN KERJA</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 60px;font-size: 18px" colspan="3" rowspan="5">
                @forelse ($peng -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $g)
                    {{ $g->tahunmasuk_pengalaman_221040 }}-{{ $g->tahunkeluar_pengalaman_221040 }}
                    <b style="color: white">...</b>
                    {{ $g->pengalaman_221040 }} <br><br>
                @empty
                    Tidak ada pengalaman
                @endforelse
            </td>
            {{-- <td colspan="2" style="font-size: 18px">pg1</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td colspan="3" style="color: white">1</td> --}}
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td style="padding-left: 60px;font-size: 18px">22-22</td> --}}
            {{-- <td colspan="2" style="font-size: 18px">pg2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td colspan="3" style="color: white">1</td> --}}
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td style="padding-left: 60px;font-size: 18px">33-33</td> --}}
            {{-- <td colspan="2" style="font-size: 18px">pg3</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold;font-size: 25px;text-align: center">KEAHLIAN</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            <td colspan="3" style="padding-left: 60px;font-size: 18px" rowspan="5">
                @forelse ($kema -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $k)
                    {{ $k->kemampuan_221040 }} <br><br>

                @empty

                    Tidak ada kemampuan
                @endforelse
            </td>
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td colspan="3" style="color: white">1</td> --}}
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td colspan="3" style="padding-left: 60px;font-size: 18px">km</td> --}}
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td colspan="3" style="color: white">1</td> --}}
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>
        <tr>
            {{-- <td colspan="3" style="padding-left: 60px;font-size: 18px">km3</td> --}}
            {{-- <td>2</td> --}}
            {{-- <td>3</td> --}}
            {{-- <td>4</td> --}}
        </tr>

    </table>
</body>

</html>
