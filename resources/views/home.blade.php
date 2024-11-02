@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container-fluid px-0">
        <img src="{{asset('assets/banner.png')}}" alt="Banner" width="100%">

        @forelse ($articles as $article)
            <div class="row mx-3 my-4">
                <div class="col-12 col-sm-4 px-3 d-flex align-items-center">
                    <img src="{{asset('assets/' . $article->photo_name)}}"  alt="Photo" style="border-radius: 15px" width="100%" style="object-fit: fill;">
                </div>

                <div class="col-12 col-sm-8 d-flex flex-column justify-content-between px-3">
                    <div class="card-group d-flex flex-column">
                        <h5 class="card-title my-0">{{$article->title}}</h5>
                        <p class="card-text fs-6 my-0">{{$article->created_at->format('d F Y') . " | by: ". $article->writer->name}}</p>
                        <p class="card-text fs-6 text-truncate" style="max-width: 100%">{{$article->description}}</p>
                    </div>
                    <a href="{{route('article', ['id' => $article->id])}}" class="btn btn-dark align-self-end rounded-pill">read more...</a>
                </div>
            </div>            
        @empty
            <div class="alert alert-danger">
                There is no article
            </div>
        @endforelse
    </div>
@endsection