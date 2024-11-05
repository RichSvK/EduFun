@extends('layouts.app')

@section('title', $writer->name)

@section('content')
    <div class="container d-flex flex-column justify-content-center" style="max-width: 1920px;">
        <div class="d-flex ms-3 mt-5">
            <img src="{{asset('assets/writer_photo/' . $writer->photo_name)}}" alt="Photo" class="img img-fluid rounded-circle" style="max-width:100px">
            <div class="ms-3 d-flex flex-column justify-content-center align-items-center">
                <h4>{{$writer->name}}</h4>
                <p>{{$writer->role}}</p>
            </div>
        </div>
        @forelse ($articles as $article)
            {{-- card-article di components dan passing $article --}}
            <x-card-article :article="$article"/>
        @empty
            <div class="alert alert-danger">
                There is no article
            </div>
        @endforelse
    </div>
@endsection