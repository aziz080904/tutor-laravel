<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Paramedik</x-slot> 
<x-slot name="card_title">Form Kelola Paramedik</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<form action="{{ route('paramedik.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama paramedik</label>
        <input type="text" name="nama" id="nama" value="{{ $paramedik->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="gender">Jenis Kelamin</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender1" value="L" {{ $paramedik->gender=='L' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender2" value="P" {{ $paramedik->gender=='P' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
    </div>
    <div class="form-group">
        <label for="tmp_lahir">Tempat Lahir</label>
        <input type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $paramedik->tmp_lahir}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $paramedik->tgl_lahir}}" class="form-control" required>
    </div>  
    <div class="form-group">
        <label for="kategori">Kategori</label>
        <select id="kategori" name="kategori" class="form-select form-select-lg mb-3">
            <option value="">--pilih--</option>
            <option value="Umum" {{ $paramedik->kategori=='Umum' ? 'selected' : ''}}>Umum</option>
            <option value="Spesialis" {{ $paramedik->kategori=='Spesialis' ? 'selected' : ''}}>Spesialis</option>
            <option value="Bidan" {{ $paramedik->kategori=='Bidan' ? 'selected' : ''}}>Bidan</option>
            <option value="Dokter Gigi" {{ $paramedik->kategori=='Dokter Gigi' ? 'selected' : ''}}>Dokter Gigi</option>
            <option value="Anastesi" {{ $paramedik->kategori=='Anastesi' ? 'selected' : ''}}>Anastesi</option>
            <option value="Bedah" {{ $paramedik->kategori=='Bedah' ? 'selected' : ''}}>Bedah</option>
            <option value="Ginekolog" {{ $paramedik->kategori=='Ginekolog' ? 'selected' : ''}}>Ginekolog</option>
        </select>       
    </div>
    <div class="form-group">
        <label for="telpon">Telpon</label>
        <input type="text" name="telpon" id="telpon" value="{{ $paramedik->telpon }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control" required>{{ $paramedik->alamat }}</textarea>
    </div>
    <div class="form-group">
        <label for="unit_kerja">Unit Kerja</label>
        <select name="unit_kerja_id" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_unit_kerja as $unit_kerja)
            <option value="{{ $unit_kerja->id }}" {{ $paramedik->unit_kerja_id==$unit_kerja->id ? 'selected': ''}}>
                {{ $unit_kerja->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $paramedik->id }}">
    <a href="{{ route('paramedik.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>