<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Pasien</x-slot> 
<x-slot name="card_title">Detail Pasien :: {{ $pasien->kode }} -  {{ $pasien->nama }}</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Kode Pasien</th><td>{{ $pasien->kode }}</td></tr>
    <tr><th>Nama Pasien</th><td>{{ $pasien->nama }}</td></tr>
    <tr><th>Jenis Kelamin</th><td>{{ $pasien->gender=='L' ? 'Laki-Laki':'Perempuan' }}</td></tr>
    <tr><th>Tempat, Tgl Lahir</th><td>{{ $pasien->tmp_lahir }}, {{ $pasien->tgl_lahir }}</td></tr>
    <tr><th>Kelurahan</th><td>{{ $pasien->kelurahan->nama }}</td></tr>
    <tr><th>Alamat</th><td>{{ $pasien->alamat }}</td></tr>
    <tr><th>Email</th><td>{{ $pasien->email }}</td></tr> 
</table>
<div>
    <a href="{{ route('pasien.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
