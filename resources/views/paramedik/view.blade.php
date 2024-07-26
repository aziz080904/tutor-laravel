<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Paramedik</x-slot> 
<x-slot name="card_title">Detail Paramedik :: {{ $paramedik->nama }} -  {{ $paramedik->kategori }}</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Kategori</th><td>{{ $paramedik->kategori }}</td></tr>
    <tr><th>Nama Paramedik</th><td>{{ $paramedik->nama }}</td></tr>
    <tr><th>Jenis Kelamin</th><td>{{ $paramedik->gender=='L' ? 'Laki-Laki':'Perempuan' }}</td></tr>
    <tr><th>Tempat, Tgl Lahir</th><td>{{ $paramedik->tmp_lahir }}, {{ $paramedik->tgl_lahir }}</td></tr>
    <tr><th>Unit Kerja</th><td>{{ $paramedik->unit_kerja->nama }}</td></tr>
    <tr><th>Telpon</th><td>{{ $paramedik->telpon }}</td></tr> 
    <tr><th>Alamat</th><td>{{ $paramedik->alamat }}</td></tr>
</table>
<div>
    <a href="{{ route('paramedik.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>


