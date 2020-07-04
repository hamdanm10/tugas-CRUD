@extends('layouts.master')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white" style="padding: 10px 0px; margin:0;">
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row py-3">
        <div class="col">
            <h4>Questions</h4>
        </div>
        <div class="col">
            <a href="create" class="btn btn-outline-success btn-sm float-right small"><span class="fa fa-plus mr-2"></span>Add Question</a>
        </div>
    </div>

    @foreach($pertanyaan as $key => $pertanyaan2)
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">{{$pertanyaan2->judul}}</h4>
                </div>
                <div class="col">
                    <form action="/{{$pertanyaan2->id}}" method="post">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm float-right"><span class="fa fa-trash-o mr-2"></span>Delete</button>
                    </form>
                    <a href="{{$pertanyaan2->id}}/edit" class="btn btn-outline-primary btn-sm float-right mr-2"><span class="fa fa-edit mr-2"></span>Edit</a>
                </div>
            </div>
            <p class="card-text">
                {{$pertanyaan2->isi}}
            </p>
            <a href="../jawaban/{{$pertanyaan2->id}}" class="card-link">Respons</a>
            <div class="row mt-4 small text-secondary">
                <div class="col"><p>{{\Carbon\Carbon::parse($pertanyaan2->created_at)->diffForHumans()}}</p></div>
                <div class="col"><p class="font-italic float-right">Published at ({{$pertanyaan2->created_at}})</p></div>
            </div>     
        </div>
    </div>
    @endforeach
@endsection