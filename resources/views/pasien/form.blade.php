<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Pasien</x-slot> 
<x-slot name="card_title">Form Kelola Pasien</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<form action="{{ route('pasien.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="kode">Kode Pasien</label>
        <input type="text" name="kode" id="kode" value="{{ $pasien->kode }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama Pasien</label>
        <input type="text" name="nama" id="nama" value="{{ $pasien->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tmp_lahir">Tempat Lahir</label>
        <input type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $pasien->tmp_lahir}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $pasien->tgl_lahir}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="gender">Jenis Kelamin</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender1" value="L" {{ $pasien->gender=='L' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender2" value="P" {{ $pasien->gender=='P' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $pasien->email}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control" required>{{ $pasien->alamat }}</textarea>
    </div>
    <div class="form-group">
        <label for="kelurahan">Kelurahan</label>
        <select name="kelurahan_id" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_kelurahan as $kelurahan)
            <option value="{{ $kelurahan->id }}" {{ $pasien->kelurahan_id==$kelurahan->id ? 'selected': ''}}>
                {{ $kelurahan->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $pasien->id }}">
    <a href="{{ route('pasien.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>