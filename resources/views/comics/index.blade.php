@extends('layouts.app')

@section('content')
<div class="p-5 mb-4">
    <h1 class="fw-bold">DC Comics</h1>
    <p class="fs-4">Tabella Comics!</p>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Info Comics</h3>
                <a href="" class="btn btn-primary">Aggiungi nuovo Comics</a>
            </div>
            <div>
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale date</th>
                        <th>Description</th>
                        <th class="text-center">Azioni</th>
                    </thead>
                    <tbody>
                        @foreach($comics as $comic)
                        <tr>
                            <td>{{ $comic['id'] }}</td>
                            <td><img src="{{ $comic['thumb'] }}" class="img-fluid" alt=""></td>
                            <td>{{ $comic['title'] }}</td>
                            <td>{{ $comic['price'] }}</td>
                            <td>{{ $comic['series'] }}</td>
                            <td>{{ $comic['sale_date'] }}</td>
                            <td>{{ $comic['description'] }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="" class="me-2 btn btn-info btn-sm btn-square" title="dettaglio comics">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="" class="btn btn-warning btn-sm btn-square" title="dettaglio comics">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection