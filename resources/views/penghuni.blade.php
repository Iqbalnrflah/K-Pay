@extends('layout')
@section('content')
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-4 text-center mb-4">
            <img src="{{ asset('storage/penghuni.jpg') }}" 
                 class="img-fluid " 
                 alt="Foto Pemilik">
        </div>
        <div class="col-md-8">
            <p>Penghuni merupakan aktor yang berperan sebagai pengguna (user) dalam Sistem Kost Pay. Penghuni menggunakan sistem sebagai pihak yang melakukan pembayaran kost. Dalam sistem, penghuni berinteraksi sesuai dengan hak akses yang dimilikinya dan bertanggung jawab atas aktivitas pembayaran yang dilakukan, sehingga proses pembayaran kost dapat berjalan dengan tertib dan terdata dengan baik.</p>
        </div>
    </div>
    <br>
    <h4 class="">Fitur-Fitur Pemilik Kos</h4>
    <div class="container mt-5">
    <div class="row">
        <!-- KOLOM KIRI -->
        <div class="col-md-6">
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/melihat.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Melihat Tagihan</h5>
            </div>
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/pilih-kamar.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Pilih Kamar</h5>
            </div>
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/pilih-bayar.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Memilih Metode Pembayaran</h5>
            </div>
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/riwayat.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Riwayat</h5>
            </div>
        </div>
        <!-- KOLOM KANAN -->
        <div class="col-md-6">
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/melakukan-bayar.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Melakukan Pembayaran</h5>
            </div>
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/unggah.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Unggah Bukti Pembayaran</h5>
            </div>
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/notifikasi.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Notifikasi</h5>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
