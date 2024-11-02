@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div class="container-fluid px-0 m-5">
        <h2>{{$article->category}}</h2>
        <img src="{{asset('assets/' . $article->photo_name)}}" alt="Foto" class="img img-fluid" width="100%" style="border-radius: 15px;max-width:1000px">
        <p>{{$article->created_at->format('d F Y') . " | by: " . $article->writer->name}}</p>
        <p>{{$article->description}}</p>
    </div>
@endsection