@extends('navbar')

@section('content')

<style>
h4 {
  color: white;
}

.card {
  color: white;
  background: #2b435772;
  transition: transform 0.3s ease, box-shadow 0.5s ease; 
}

.card:hover {

  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); 
}

</style>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row text-center justify-content-center ">
        <div class="card g-col-4  mx-4 my-4" style="width: 16rem;">
          <img src="{{asset('publicimage/paket1grad.jpg')}}" class="card-img-top my-3 col-sm-4"  alt="pictcard">
          <div class="card-body">
            <h5 class="card-title">Paket 1 Wisudawan</h5>

            <p class="card-text">
              <b>300k</b>
            <br>1 jam sesi foto
            <br>Wisudawan + keluarga
            <br>20 edit foto
            <br>All Files original + edited via google drive</p>
            <a href="#" class="btn btn-primary">Booking</a>
          </div>
        </div>

        <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
          <img src="{{asset('publicimage/paket2grad.jpg')}}" class="card-img-top my-3" alt="pictcard">
          <div class="card-body">
            <h5 class="card-title">Paket Grup 2-3 Wisudawan</h5>
            <p class="card-text">
            <b>500k</b>
            <br>1 jam sesi foto
            <br>10 edit foto per orang
            <br>All Files original + edited via google drive
            </p>
            <a href="#" class="btn btn-primary">Booking</a>
          </div>
        </div>

        <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
          <img src="{{asset('publicimage/paket3grad.jpg')}}" class="card-img-top my-3" alt="pictcard">
          <div class="card-body">
            <h5 class="card-title">Paket Grup 4-5 Wisudawan</h5>
            <p class="card-text">
            <b>600k</b>
            <br>1 jam sesi foto
            <br>10 edit foto per orang
            <br>All Files original + edited via google drive
            </p>
            <a href="#" class="btn btn-primary">Booking</a>
          </div>
        </div>

        <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
          <img src="{{asset('publicimage/pasfoto.jpg')}}" class="card-img-top my-3" alt="pictcard">
          <div class="card-body">
            <h5 class="card-title">Pas Foto</h5>
            <p class="card-text">
            <b>30k</b>
            <br>1 file foto edit
            <br>1 file siap cetak ukuran 4x6/3x4
            <br>1 file foto original
            <br>All file via google drive
            </p>
            <a href="#" class="btn btn-primary">Booking</a>
          </div>
        </div>
      </div>

      </div>
    <div class="carousel-item">
    <div class="row text-center justify-content-center ">
    <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{asset('publicimage/maternity.jpg')}}" class="card-img-top my-3" alt="pictcard">
    <div class="card-body">
      <h5 class="card-title">Maternity</h5>
      <p class="card-text">
      <b>750k</b>
      <br>Indoor/Outdoor
      <br>1 jam sesi foto
      <br>20 foto edit
      <br>2 foto cetak + frame 12R
      <br>All file via google drive
      </p>
      <a href="#" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{asset('publicimage/photoshoot.jpg')}}" class="card-img-top my-3" alt="pictcard">
    <div class="card-body">
      <h5 class="card-title">Photoshoot</h5>
      <p class="card-text">
      <b>300k/1 jam
      <br>200k/30 menit</b>
      <br>Sewa Studio
      <br>Fotografer
      <br>20 foto edit
      <br>All file via google drive
      </p>
      <a href="#" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{asset('publicimage/personal.jpg')}}" class="card-img-top my-3" alt="pictcard">
    <div class="card-body">
      <h5 class="card-title">Personal</h5>
      <p class="card-text">
      <b>300k/1 jam
      <br>200k/30 menit</b>
      <br>Sewa Studio
      <br>Fotografer
      <br>20 foto edit
      <br>All file via google drive
      </p>
      <a href="#" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{asset('publicimage/grup.jpg')}}" class="card-img-top my-3" alt="pictcard">
    <div class="card-body">
      <h5 class="card-title">Grup</h5>
      <p class="card-text">
      <b>300k/1 jam
      <br>200k/30 menit</b>
      <br>Sewa Studio
      <br>Fotografer
      <br>20 foto edit
      <br>All file via google drive
      </p>
      <a href="#" class="btn btn-primary">Booking</a>
    </div>
  </div>
    </div>
    </div>
  </div>
  <br>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@endsection