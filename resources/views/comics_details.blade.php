@extends('layouts.app')

@section('content')
<div class="position bg-blue">
    <img class="img-fluid image-comics" src="{{ $single['thumb'] }}" alt="">
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="card border border-0">
                <div class="d-flex">
                    <div class="col-8">
                        <h3 class="text-uppercase"><strong>{{ $single['title'] }}</strong></h3>
                        <p class="bg-green border-bottom border-dark ">U.S. Price: <strong class="text-white">{{ $single['price'] }}</strong></p>
                        <p>{{ $single['description'] }}</p>
                    </div>
                    <div class="col-4 ps-5">
                        <p class="text-end pe-4">ADVERTISMENT</p>
                        <img class="img-fluid" src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection