@extends('layouts.app')

@section('title', $category)

@section('content')
    <div class="container-fluid p-5 m-0">
        <h2>{{$category}}</h2>
        @forelse ($articles as $article)
            <x-card-article :article="$article"/>
        @empty
            <div class="alert alert-danger">
                There is no article
            </div>
        @endforelse
    </div>
@endsection