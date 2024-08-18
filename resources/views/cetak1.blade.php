<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
        *,body{
            margin: 0;
            padding: 0;
        }
    </style>
    
</head>
<body>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td width="40%" rowspan="10"  style="text-align: center;background-color: #FF8080;color: white; padding-top: 5px;padding-bottom: 2px"><img src="{{ public_path('gambar/' . $bio->foto_221040) }}" width="60%" style="border-radius: 50%;" alt=""></td>
            <td colspan="3" ></td>
            
            
        </tr>
        <tr>
            
            <td colspan="3"></td>

        </tr>
        <tr>
            
            <td colspan="3" style="text-align: center;font-size: 20px;">DAFTAR RIWAYAT HIDUP</td>

        </tr>
        <tr>
            
            <td colspan="3" style="text-align: center;font-size: 30px;font-weight: bold;">{{$bio->nama_221040}}</td>
            
        </tr>
        <tr>
            
            <td colspan="3"></td>
            
        </tr>
        <tr>
            
            <td colspan="3" ></td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            {{-- <td >1</td> --}}
            <td colspan="3"></td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            {{-- <td >1</td> --}}
            <td colspan="3" style="text-align: center;font-size: 20px;font-weight: bold;">TENTANG SAYA</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            {{-- <td >1</td> --}}
            <td colspan="3"></td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            {{-- <td >1</td> --}}
            <td rowspan="5" colspan="3" style="text-align: center;padding-left: 10px;padding-right: 10px;">{{$bio->tentang_221040}}</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="font-size: 20px;font-weight: bold;text-align: center;background-color: #FF8080;color: white;">DATA PRIBADI</td>
            {{-- <td >1</td> --}}
            {{-- <td>1</td>
            <td>1</td>
            <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            {{-- <td >1</td> --}}
            {{-- <td>1</td>
            <td>1</td>
            <td>1</td> --}}
        </tr>
        <tr>
            <td style="font-size: 18px;font-weight: bold;padding-left: 20px;background-color: #FF8080;color: white;">Nama :</td>
            {{-- <td >1</td> --}}
            {{-- <td>1</td>
            <td>1</td>
            <td>1</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">{{$bio->nama_221040}}</td>
            {{-- <td >1</td> --}}
            {{-- <td>1</td>
            <td>1</td>
            <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="font-weight: bold;padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">Tempat/Tanggal Lahir:</td>
            <td rowspan="2" colspan="3" style="font-size: 20px;font-weight: bold;text-align: center">RIWAYAT PENDIDIKAN</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">{{$bio->tempatlahir_221040}}, {{$bio->ttl_221040}}</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="font-weight: bold;padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">Alamat:</td>
            <td width="35%" style="padding-left: 30px;font-size: 18px;" rowspan="4" colspan="3">
                @forelse ($pend -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $p)
                {{ $p->tahunmasuk_pendidikan_221040 }} - {{ $p->tahunkeluar_pendidikan_221040 }} <b style="color: white">.....</b> {{ $p->pendidikan_221040 }}<br>
                @empty
                tidak ada pendidikan
                @endforelse
            </td>
            {{-- <td width="5%"> :</td> --}}
            {{-- <td>Tahun masuk - keluar</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">{{$bio->alamat_221040}}</td>
            {{-- <td width="35%" style="padding-left: 30px;font-size: 18px;">pendidikan22</td> --}}
            {{-- <td width="5%"> :</td> --}}
            {{-- <td>Tahun masukk - keluarr</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            {{-- <td width="35%" style="padding-left: 30px;font-size: 18px;">pendidikan33</td> --}}
            {{-- <td width="5%"> :</td> --}}
            {{-- <td>Tahun masukk - keluarr</td> --}}
        </tr>
        <tr>
            <td style="font-weight: bold;padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">No Telp/HP</td>
            {{-- <td width="35%" style="padding-left: 30px;font-size: 18px;">pemdidikan44</td> --}}
            {{-- <td width="5%"> :</td> --}}
            {{-- <td>Tahun masukkk - keluarrr</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">{{$bio->nohp_221040}}</td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" rowspan="2" style="font-size: 20px;font-weight: bold;text-align: center">PENGALAMAN KERJA</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="font-weight: bold;padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">Email:</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">{{$bio->email_221040}}</td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td style="padding-left: 30px;font-size: 18px;" rowspan="3" colspan="3">
                @forelse ($peng -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $g)
                {{ $g->tahunmasuk_pengalaman_221040 }} - {{ $g->tahunkeluar_pengalaman_221040 }} <b style="color: white">.....</b> {{ $g->pengalaman_221040 }}<br>
                @empty
                tidak ada pengalaman
                @endforelse
            </td>
            {{-- <td>-></td> --}}
            {{-- <td>Tahun keluarr - keluarr</td> --}}
        </tr>
        <tr>
            <td style="font-weight: bold;padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">Facebook:</td>
            {{-- <td style="padding-left: 30px;font-size: 18px;">pengalaman2</td> --}}
            {{-- <td>-></td> --}}
            {{-- <td>Tahun 1 - 2</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">{{$bio->fb_221040}}</td>
            {{-- <td style="padding-left: 30px;font-size: 18px;">pengalaman3</td> --}}
            {{-- <td>-></td> --}}
            {{-- <td>Tahun 2 - 3</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="font-weight: bold;padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">Instagram:</td>
            <td rowspan="2" colspan="3" style="font-size: 20px;font-weight: bold;text-align: center">KEAHLIAN</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="padding-left: 20px;background-color: #FF8080;color: white;font-size: 18px;">{{$bio->ig_221040}}</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="padding-left: 30px;font-size: 18px;" rowspan="3">
                @forelse ($kema -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $k)
                    {{ $k->kemampuan_221040 }}<br>
                @empty
                    Tidak ada keahlian
                @endforelse
            </td>
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            {{-- <td colspan="3" style="padding-left: 30px;font-size: 18px;">kemampuan2</td> --}}
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            {{-- <td colspan="3" style="padding-left: 30px;font-size: 18px;">kemampuan3</td> --}}
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
        <tr>
            <td style="background-color: #FF8080;color: white;"></td>
            <td colspan="3" style="color: white">1</td>
            {{-- <td>1</td> --}}
            {{-- <td>1</td> --}}
        </tr>
    </table>
</body>