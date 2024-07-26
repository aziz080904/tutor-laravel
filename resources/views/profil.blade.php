<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Halaman profil</x-slot> 
<x-slot name="card_title">Profilku</x-slot> 
<x-slot name="card_footer">Projek - Aplikasi Web Sederhana Puskesmas</x-slot>

<div class="card-body">
<div class="container">
    <h4 class="text-center mt-4">Selamat Datang Di Website Puskesmas<br />Projek PusKesMas</h4>
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="card-title">Informasi Mahasiswa</h5>
                            <div class="text-center">
                                <img src="{{ asset('assets/img/photo1.png') }}" class="img-fluid" alt="Profile Image">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Nama :</strong> Yadi Adi</li>
                                <li class="list-group-item"><strong>NIM :</strong> 11111111</li>
                                <li class="list-group-item"><strong>Rombel :</strong> SI</li>
                                <li class="list-group-item"><strong>Program Studi :</strong> Sistem Informasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</x-layout>