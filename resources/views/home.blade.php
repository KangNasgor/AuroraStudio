@extends('navbar')

@section('content')
<style>
    h1{
        font-size: 38px;
        font-family: Georgia, 'Times New Roman', Times, serif ;
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
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
    }


</style>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="text mt-4"><center><h1>Welcome To AuroraStudio</h1></center></div>
  <div class="carousel-inner">
    <div class="carousel-item active">
            <div class="row text-center justify-content-center ">
                <div class="card g-col-4  mx-4 my-3" style="width: 16rem; height: 20rem;">
            <img src="{{asset('publicimage/card1.jpg')}}" class="card-img-top my-3 col-sm-2" style="height: 287px;"  alt="...">
        </div>

        <div class="card g-col-4  mx-4 my-3" style="width: 16rem; height: 20rem;">
            <img src="{{asset('publicimage/card2.jpg')}}"class="card-img-top my-3 col-sm-2" style="height: 287px;"  alt="...">
        </div>

        <div class="card g-col-4  mx-4 my-3" style="width: 16rem; height: 20rem;">
            <img src="{{asset('publicimage/card3.jpg')}}" class="card-img-top my-3 col-sm-2" style="height: 287px;"  alt="...">
        </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="row text-center justify-content-center ">
        <div class="card g-col-4  mx-4 my-3" style="width: 16rem; height: 20rem;">
            <img src="{{asset('publicimage/card4.jpg')}}" class="card-img-top my-3 col-sm-2" style="height: 287px;"  alt="...">
        </div>

        <div class="card g-col-4  mx-4 my-3" style="width: 16rem; height: 20rem;">
            <img src="{{asset('publicimage/card5.jpg')}}" class="card-img-top my-3 col-sm-2" style="height: 287px;"  alt="...">
        </div>

        <div class="card g-col-4  mx-4 my-3" style="width: 16rem; height: 20rem;">
            <img src="{{asset('publicimage/card6.jpg')}}" class="card-img-top my-3 col-sm-2" style="height: 287px;"  alt="...">
        </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="row text-center justify-content-center ">
         <div class="card g-col-4  mx-4 my-3" style="width: 16rem; height: 20rem;">
            <img src="{{asset('publicimage/card7.jpg')}}" class="card-img-top my-3 col-sm-2" style="height: 287px;"  alt="...">
        </div>

        <div class="card g-col-4  mx-4 my-3" style="width: 16rem; height: 20rem;">
            <img src="{{asset('publicimage/card8.jpg')}}" class="card-img-top my-3 col-sm-2" style="height: 287px;"  alt="...">
        </div>

        <div class="card g-col-4  mx-4 my-3" style="width: 16rem; height: 20rem;">
            <img src="{{asset('publicimage/card9.jpg')}}" class="card-img-top my-3 col-sm-2" style="height: 287px;"  alt="...">
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

@guest
    <center><a href="/login" class="btn btn-primary mt-4">Login untuk Booking</a></center>
@endguest
 @endsection
