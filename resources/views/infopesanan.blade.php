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
        backdrop-filter: blur(5px);
        border: 2px solid black;
    }

    .tableinformation th, .tableinformation td {
        color: white;
        border: 2px solid black;
        background-color: #4683b4a9;
        padding: 25px;
    }

    .tableinformation td {
        border-bottom: 2px solid black;
    }

    .tableinformation th:first-child,
    .tableinformation td:first-child {
        width: 30%;
        padding: 20px;
    }

    .tableinformation th:last-child,
    .tableinformation td:last-child {
        width: 70%;
    }

    .card {
        background-color: #6494ed84;
        border-radius: 15px;
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.2);
    }
</style>

<section id="hero" class="container">
    <div class="textinfopesanan">
        <h1>INFO PESANAN</h1>
    </div>
    <div class="row justify-content-center">
        <div class="card text-center col-md-8" style="width: 50rem;">
            <div class="container mt-3">
                @auth
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
                                    <td>
                                        @if($bookings->tempat === 'Indoor' && empty($bookings->lokasi))
                                            Studio Aurora Photostudio
                                        @else
                                            {{ $bookings->lokasi }}
                                        @endif
                                    </td>
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
                @else
                    <p class="text-center">Anda belum login. Silakan <a href="/login" class="btn btn-primary">login</a> terlebih dahulu.</p>
                @endauth
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection
