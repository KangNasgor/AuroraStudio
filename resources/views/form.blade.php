@extends('navbar')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Booking Wisuda</h2>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="mb-3">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="text" class="form-control" id="tempat" placeholder="Nama Universitas">
                        </div>
                        <div class="mb-3">
                            <label for="nomorWA" class="form-label">Nomor WA aktif</label>
                            <input type="number" class="form-control" id="nomorWA" placeholder="Enter phone number">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" placeholder="Lokasi">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="hariTanggal" class="form-label">Hari dan Tanggal</label>
                                <input type="date" class="form-control" id="hariTanggal">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jamBooking" class="form-label">Jam Booking</label>
                                <input type="time" class="form-control" id="jamBooking">
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
@endsection
