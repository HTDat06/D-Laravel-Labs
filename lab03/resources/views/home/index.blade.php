@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/gta.jpg') }}" class="img-fluid rounded w-100" style="height: 250px; object-fit: cover;">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/console.jpg') }}" class="img-fluid rounded w-100" style="height: 250px; object-fit: cover;">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/mine.jpg') }}" class="img-fluid rounded w-100" style="height: 250px; object-fit: cover;">
    </div>
</div>
@endsection