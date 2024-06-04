@extends('layout/layout')
@section('navbaradmin')
    <div class="wrapper">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Customer</h5>
              <p class="card-text">Jumlah : {{$customerCount}}</p>
              <a href="{{ route('customers') }}" class="card-link">Customers Page</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Sessions</h5>
              <p class="card-subtitle text-muted">Photographer in a sessions</p>
              <ul>
              @foreach ($sessions as $sesi)
                <li class="card-text">{{$sesi->photographer->name}}</li>
              @endforeach
              </ul>
              <a href="{{ route('photography_sessions') }}" class="card-link">Sessions Page</a>
            </div>
        </div>
    </div>
@endsection
<style>
    .card-body{
        display: flex;
        flex-direction: column;
    }
    .card-body p{
        font-size: 12px;
    }
</style>