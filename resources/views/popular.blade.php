@extends('layouts.app')

@section('title', 'Popular Articles')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-5 ms-4">Popular</h1>
        @forelse ($articles as $article)
            <x-card-article :article="$article"/>
        @empty
            <div class="alert alert-danger">
                There is no article
            </div>
        @endforelse
        <div class="d-flex justify-content-center">
            {{$articles->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection