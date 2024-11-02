@extends('layouts.app')

@section('title', 'Writer Page')

@section('content')
    <div class="container-fluid px-0">
        <h1 class="p-5 mb-0">Our Writers:</h1>
        <div class="row justify-content-around my-5 w-100 mt-0">
            @forelse ($writers as $writer)
                <a class="col-2 col-md-3 d-flex flex-wrap flex-column align-items-center text-dark px-0" style="text-decoration: none" href="{{route('articleByWriter', ['writer' => $writer])}}">
                    <img src="{{asset('assets/writer_photo/' . $writer->photo_name)}}" alt="Writer Photo" class="img img-fluid rounded-circle mb-3" style="width: 200px; height: 200px;">
                    <h4 class="text-center m-0 fw-bold">{{$writer->name}}</h4>
                    <h5 class="text-center m-0">{{$writer->role}}</h5>
                </a>
            @empty
                <div class="alert alert-danger">
                    There is no writer
                </div>
            @endforelse
        </div>
    </div>
@endsection