<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Pasien</x-slot> 
<x-slot name="card_title">Daftar Pasien Aktif</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>

<h2 class="text-center">Data Pasien</h2>
<a href="{{ route('pasien.create') }}"><button class="btn btn-primary"><i class="fas fa-plus">Tambah Data</i></button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>  
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Kelurahan</th> 
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_pasien as $pasien)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $pasien->kode }}</td>
            <td>{{ strtoupper($pasien->nama) }}</td>
            <td>{{ $pasien->tmp_lahir }}</td>
            <td>{{ $pasien->tgl_lahir }}</td>
            <td>{{ $pasien->gender }}</td>
            <td>{{ $pasien->email }}</td>
            <td>{{ $pasien->alamat }}</td>
            <td>{{ $pasien->kelurahan->nama }}</td>
            <td>
               <form action="{{ route('pasien.destroy', $pasien->id) }}" method="post">
               <a href="{{ route('pasien.view', $pasien->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
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