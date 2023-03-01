@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h1>CD Comics {{ $comic['title']}}</h1>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
        @if(!empty($comic['thumb']))
        <img src="{{ $comic['thumb'] }}" class="image-px">
        @else
        <h5>Image not found</h5>
        @endif
        <table class="table">
            <tbody>
                <tr>
                    <th>Title</th>
                    <td>{{ $comic['title'] }}</td>
                </tr>
                <tr>
                    <th>Series</th>
                    <td>{{ $comic['series'] }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $comic['price'] }}</td>
                </tr>
                <tr>
                    <th>Sale date</th>
                    <td>{{ $comic['sale_date'] }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $comic['description'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection