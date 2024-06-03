@extends('navbar')

@section('content')
<style>
    .textinfopesanan {
        color: black;
        text-align: center;
        margin-top: 18px;
    }

    .tableinformation {
        background-color: #4683b4a9;
        backdrop-filter: blur(5px); /* Efek blur hanya diterapkan pada latar belakang tabel */
        border: 2px solid black;
    }

    .tableinformation th, .tableinformation td {
        color: white;
        border: 2px solid black;
        background-color: #4683b4a9;
        padding: 25px; /* Mengurangi padding agar tabel lebih kecil */
    }

    .tableinformation td {
        border-bottom: 2px solid black; /* Mengatur garis bawah tebal untuk elemen td */
    }

    .tableinformation th:first-child,
    .tableinformation td:first-child {
        width: 30%; /* Lebar kolom Information */
        padding: 20px;
    }

    .tableinformation th:last-child,
    .tableinformation td:last-child {
        width: 70%; /* Lebar kolom Details */
    }

    .card {
        background-color: #6494ed84;
        border-radius: 15px;
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.2); /* Memperbaiki nilai box-shadow */
    }
</style>

<section id="hero" class="container">
    <!--text infopesanan-->
    <div class="textinfopesanan">
        <h1>INFO PESANAN</h1>
    </div>
    <!--bagian dalam infopesanan-->
    <div class="row justify-content-center">
        <div class="card text-center col-md-8" style="width: 50rem;">
            <div class="container mt-3">
                @if($bookings)
                <table class="table tableinformation">
                    <thead>
                        <tr>
                            <th>Information</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $bookings->nama }}</td>
                        </tr>
                        <tr>
                            <td>Paket</td>
                            <td>{{ $bookings->paket }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $bookings->nomor_wa }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $bookings->email }}</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>{{ $bookings->lokasi }}</td>
                        </tr>
                        <tr>
                            <td>Hari dan Tanggal</td>
                            <td>{{ $bookings->tanggal }}</td>
                        </tr>
                        <tr>
                            <td>Waktu</td>
                            <td>{{ $bookings->jam }}</td>
                        </tr>
                    </tbody>
                </table>
                @else
                <p class="text-center">Anda belum melakukan booking.</p>
                @endif
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection