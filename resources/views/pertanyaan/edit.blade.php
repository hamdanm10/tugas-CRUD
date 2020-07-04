@extends('layouts.master')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white" style="padding: 10px 0px; margin:0;">
            <li class="breadcrumb-item"><a href="../">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Question</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="card mt-3 mb-4">
        <div class="card-body">
            <h4 class="card-title">Edit Question</h4>
            <form action="/{{$pertanyaan->id}}" class="mt-4" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="judul">Title:</label>
                    <input type="text" class="form-control" placeholder="Add title" id="judul" name="judul" value="{{$pertanyaan->judul}}">
                </div>
                <div class="form-group">
                    <label for="isi">Question:</label>
                    <textarea class="form-control" rows="5" id="isi" name="isi" value="">{{$pertanyaan->isi}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
        </div>
    </div>
@endsection