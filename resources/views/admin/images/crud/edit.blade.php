@extends('layout/layout')
@section('navbaradmin')
<div>
    <h1>Add Image</h1>
    <div class="container row">
        <form action="{{ route('images.edit',$images->id) }}" method="POST" class="form w-75 border border-secondary rounded-1 p-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Wisuda</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_wisuda" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-6 col-form-label">Foto Personal</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_personal" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Grup</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_grup" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-6 col-form-label">Foto Maternity</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_maternity" type="file" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="button" class="btn btn-danger" onclick="history.go(-1);">Back</button>
        </form>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@endsection

<style>
    form{
        padding-top: 10px;
        padding-bottom: 10px;
        height: 500px;
    }
    form div input{
        height:10px;
    }
    .box{
        width: 300px;
        margin-bottom: 20px
    }
</style>