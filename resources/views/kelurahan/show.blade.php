<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Kelurahan</x-slot> 
<x-slot name="card_title">Daftar Kelurahan</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>

<h2 class="text-center">Data Kelurahan</h2>
<a href=""><button class="btn btn-primary mb-1">Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kelurahan</th>  
            <th>Kecamatan</th>
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_kelurahan as $kelurahan)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $kelurahan->nama }}</td>
            <td>{{ $kelurahan->kec_id }}</td>
            <td>
                <a href="" class="btn btn-primary">View</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>