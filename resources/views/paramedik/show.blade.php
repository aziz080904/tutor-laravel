<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Paramedik</x-slot> 
<x-slot name="card_title">Daftar Paramedik Aktif</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>

<h2 class="text-center">Data Paramedik</h2>
<a href="{{ route('paramedik.create') }}"><button class="btn btn-primary"><i class="fas fa-plus">Tambah Data</i></button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Paramedik</th>  
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kategori</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Unit Kerja</th> 
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_paramedik as $paramedik)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ strtoupper($paramedik->nama) }}</td>
            <td>{{ $paramedik->gender }}</td>
            <td>{{ $paramedik->tmp_lahir }}</td>
            <td>{{ $paramedik->tgl_lahir }}</td>
            <td>{{ $paramedik->kategori }}</td>
            <td>{{ $paramedik->telpon }}</td>
            <td>{{ $paramedik->alamat }}</td>
            <td>{{ $paramedik->unit_kerja->nama }}</td>
            <td>
               <form action="{{ route('paramedik.destroy', $paramedik->id) }}" method="post">
               <a href="{{ route('paramedik.view', $paramedik->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               <a href="{{ route('paramedik.edit', $paramedik->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-transparant"><i class="fas fa-trash text-danger"></i></button>
               </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>