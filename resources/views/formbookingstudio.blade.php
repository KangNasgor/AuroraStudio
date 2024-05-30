@extends('navbar')

@section('content')
<style>
    body{
        background-image: url('{{ asset('img/background.jpeg')}}');
        background-size: cover;

    }
</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Booking Aurora Photostudio</h2>
                    <form action="{{ route('form.store') }}" method="POST">
                    @csrf
                    @method('POST')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nomorWA" class="form-label">Nomor WA aktif</label>
                            <input type="number" class="form-control" id="nomorWA" placeholder="Enter phone number" name="nomor_wa">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="selectPaket" class="form-label">Pilihan Paket</label>
                            <select class="form-select" id="selectPaket" name="paket">
                                <option value="">Pilih Paket</option>
                                <option value="Wisuda">Wisuda</option>
                                <option value="Pre-Wedd">Pre-Wedd</option>
                                <option value="PasFoto">Maternity</option>
                                <option value="Photoshoot">Photoshoot</option>
                                <option value="Personal">Personal</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="selectTempat" class="form-label">Tempat</label>
                            <select class="form-select" id="selectTempat" onchange="toggleLokasi()" name="tempat">
                                <option value="">Pilih Tempat</option>
                                <option value="Indoor">Indoor (Aurora Photostudio)</option>
                                <option value="Outdoor">Outdoor</option>
                            </select>
                        </div>

                        <div class="mb-3" id="lokasiContainer">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="lokasi">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="hariTanggal" class="form-label">Hari dan Tanggal</label>
                                <input type="date" class="form-control" id="hariTanggal" name="tanggal">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jamBooking" class="form-label">Jam Booking</label>
                                <input type="time" class="form-control" id="jamBooking" name="jam">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleLokasi() {
        var selectTempat = document.getElementById('selectTempat');
        var lokasiContainer = document.getElementById('lokasiContainer');

        if (selectTempat.value === 'Outdoor') {
            lokasiContainer.style.display = 'block';
        } else {
            lokasiContainer.style.display = 'none';
        }
    }

    // Inisialisasi dengan menyembunyikan lokasi pada awal pemuatan halaman
    document.addEventListener('DOMContentLoaded', function() {
        toggleLokasi();
    });
</script>
@endsection
