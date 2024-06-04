@extends('layout/layout')
@section('navbaradmin')
<div class="mt-5">
    <div class="col-12 table-responsive">
        <a class="btn btn-danger" href="{{route('images')}}">Back</a>
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
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $img)
                    <tr>
                        <td>
                            {{$img->foto_wisuda}}
                        </td>
                        <td>
                            {{$img->foto_personal}}
                        </td>
                        <td>
                            {{$img->foto_maternity}}
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
</style>