@extends('layout')
@section('content')
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-4 text-center mb-4">
            <img src="{{ asset('storage/pemilik.png') }}" 
                 class="img-fluid " 
                 alt="Foto Pemilik">
        </div>
        <div class="col-md-8">
            <p>Pemilik Kost merupakan aktor yang berperan sebagai pengguna utama (admin) dalam Sistem Kost Pay. Pemilik kost memiliki otoritas tertinggi dalam sistem dan bertanggung jawab atas pengelolaan serta pengawasan penggunaan sistem. Dalam konteks sistem, pemilik kost berfungsi sebagai pengendali dan penanggung jawab utama terhadap data dan aktivitas yang berlangsung, sehingga memastikan sistem digunakan sesuai dengan tujuan pengelolaan kost.</p>
        </div>
    </div>
    <br>
    <h4 class="">Fitur-Fitur Pemilik Kos</h4>
    <div class="container mt-5">
    <div class="row">
        <!-- KOLOM KIRI -->
        <div class="col-md-6">
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/data-kamar.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Kelola data kamar</h5>
            </div>
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/data-penghuni.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Kelola data penghuni</h5>
            </div>
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/tarif.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Menentukan tarif kost</h5>
            </div>
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/riwayat.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Riwayat</h5>
            </div>
        </div>
        <!-- KOLOM KANAN -->
        <div class="col-md-6">
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/pembayaran.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Menentukan metode pembayaran</h5>
            </div>
            <div class="feature-item d-flex align-items-center mb-4">
                <img src="{{ asset('storage/menerima.jpg') }}" class="feature-img me-3">
                <h5 class="mb-0">Menerima Pembayaran</h5>
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
