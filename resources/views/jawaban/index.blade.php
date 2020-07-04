@extends('layouts.master')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white" style="padding: 10px 0px; margin:0;">
            <li class="breadcrumb-item"><a href="../">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Answers</li>
        </ol>
    </nav>
@endsection

@section('content')
    <h4 class="py-3">Fill Out The Question</h4>

    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title">{{$pertanyaan->judul}}</h4>
            <p class="card-text">
                {{$pertanyaan->isi}}
            </p>
        </div>
    </div>
    <h5>Answers</h5>
    
    @foreach($jawaban as $key => $jawaban2)
    <div class="card mb-4">
        <div class="card-body">
            <p class="card-text">
                {{$jawaban2->isi}}
            </p>
            <p class="text-secondary small mt-4">{{\Carbon\Carbon::parse($pertanyaan->created_at)->diffForHumans()}}</p>
        </div>
    </div>
    @endforeach

    <div class="border-bottom mb-2"></div>
    <form action="/jawaban/{{$pertanyaan->id}}" method="POST" class="mb-4">
    @csrf
        <div class="form-group">
            <label for="isi">Add an answer:</label>
            <textarea class="form-control" rows="5" id="isi" name="isi"></textarea>
        </div>
        <input type="text" name="pertanyaan_id" value="{{$pertanyaan->id}}" class="d-none">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection