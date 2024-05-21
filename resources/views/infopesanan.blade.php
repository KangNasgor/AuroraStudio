@extends('navbar')

@section('content')
<style>
    .textinfopesanan {
        color: black;
        text-align: center;
        margin-top: 2%;
    }

    .tableinformation {
    background-color: #4683b4a9;
    backdrop-filter: blur(5px); /* Efek blur hanya diterapkan pada latar belakang tabel */
    border: 2px solid black;
}

    .tableinformation th, td {
        color: white;
        border: 2px solid black;
        background-color: #4683b4a9;
        padding: 25px; /* Mengurangi padding agar tabel lebih kecil */ 
    }

    .tableinformation td {
        color: white;
        background-color: #4683b4a9;    
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
        box-shadow: 0 0 3   5px rgba(0, 0, 0, 0.2);
    }

    
</style>
<section id="hero" class="container">
    <!--text infopesanan-->
    <div class="textinfopesanan">
        <h1>INFO PESANAN</h1>
    </div>
    <br>
    <!--bagian dalam infopesanan-->
    <div class="row justify-content-center">
        <div class="card text-center col-md-8" style="width: 50rem;">
            <div class="container mt-3 ">
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
                            <td></td>
                        </tr>
                        <tr>
                            <td>Paket</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Hari dan Tanggal</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bukti Transfer</td>
                            <td><img src="..." class="img-fluid" alt="Foto Bukti Transfer"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection