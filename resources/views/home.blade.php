@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container-fluid px-0">
        <img src="{{asset('assets/banner.png')}}" alt="Banner" width="100%">

        @forelse ($articles as $article)
            <x-card-article :article="$article"/>
        @empty
            <div class="alert alert-danger">
                There is no article
            </div>
        @endforelse
    </div>
@endsection