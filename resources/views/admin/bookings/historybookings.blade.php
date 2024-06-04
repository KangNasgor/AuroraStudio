@extends('layout/layout')
@section('navbaradmin')
<button type="button" class="btn btn-danger" onclick="history.go(-1);">Back</button>
<table id="table" class="table table-striped table-secondary table-hover table-borderless">
    <thead>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Paket</th>
            <th>Email</th>
            <th>Jam</th>
            <th>Tempat</th>
            <th>Lokasi</th>
            <th>Payment</th>
            <th>Status</th>
            <th>Action</th> 
        </tr>
    </thead>
    <tbody>
    @foreach ($bookings as $book)
        <tr>
            <td>
                {{$book->name}}
            </td>
            <td>
                {{$book->booking_date}}
            </td>
            <td>
                {{$book->paket}}
            </td>
            <td>
                {{$book->email}}
            </td>
            <td>
                {{$book->jam}}
            </td>
            <td>
                {{$book->tempat}}
            </td>
            <td>
                {{$book->lokasi}}
            </td>
            <td>
                {{$book->payment_status}}
            </td>
            <td>
                {{$book->status}}
            </td>
            <td>
                <a href="{{ route('bookings.restore', $book->id) }}" class="btn btn-primary"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                <a class="btn btn-danger" data-toggle="modal" data-target="#del{{ $book->id }}"><i class="fa-solid fa-trash"></i></a>
                <form action="{{ route('bookings.delete', $book->id) }}" method="POST" class="modal fade" id="del{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    @csrf
                    @method('DELETE')
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        Are you sure you want to delete this item?
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
<style>
    #table{
        border-radius: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-collapse: collapse; 
        border: none
    }
</style>