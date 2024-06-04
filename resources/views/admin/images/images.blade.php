@extends('layout/layout')
@section('navbaradmin')
<div class="mt-5">
    <div class="col-12 table-responsive">
        <a class="btn btn-secondary" href="{{route('images.create')}}">Create</a>
        <a class="btn btn-warning" href="{{route('images.history')}}">History</a>
        <table id="table" class="table table-striped table-secondary table-hover table-borderless">
            <thead>
                <tr>
                    <th>Foto Wisuda</th>
                    <th>Foto Personal</th>
                    <th>Foto Grup</th>
                    <th>Foto Maternity</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Status Aktif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $img)
                    <tr>
                        <td>
                            @if($img->foto_wisuda)
                                <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_wisuda) }}" alt="Foto Wisuda" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        <td>
                            @if($img->foto_personal)
                            <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_personal) }}" alt="Foto Personal" class="img-fluid">
                        @else
                            <p>No image available</p>
                        @endif
                        </td>
                        <td>
                            @if($img->foto_grup)
                            <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_grup) }}" alt="Foto Grup" class="img-fluid">
                        @else
                            <p>No image available</p>
                        @endif
                        </td>
                        <td>
                            @if($img->foto_maternity)
                            <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_maternity) }}" alt="Foto Maternity" class="img-fluid">
                        @else
                            <p>No image available</p>
                        @endif
                        </td>
                        <td>
                            {{$img->created_at}}
                        </td>
                        <td>
                            {{$img->updated_at}}
                        </td>
                        <td>
                            {{$img->status_aktif}}
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('images.editpage', $img->id)}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                                <a class="btn btn-danger" data-toggle="modal" data-target="#softdel{{ $img->id }}"><i class="fa-solid fa-trash"></i></a>
                                <form action="{{ route('images.softdelete', $img->id) }}" method="POST" class="modal fade" id="softdel{{ $img->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    @csrf
                                    @method('PUT')
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
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<style>
    #table{
        border-radius: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-collapse: separate; 
    }
    .action-buttons{
        display: flex;
        flex-direction: row;
        gap: 10px;
    }
</style>