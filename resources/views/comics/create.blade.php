@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h1> Add New CD Comics</h1>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="" class="control-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Add Title">
            </div> 
            <div class="form-group mb-3">
                <label for="" class="control-label">Price</label>
                <span class="currencyinput">$<input type="text" name="price"></span>
            </div>
            <div class="form-group mb-3">
                <label for="" class="control-label">Series</label>
                <input type="text" name="series" class="form-control" placeholder="Add Series">
            </div> 
            <div class="form-group mb-3">
                <label for="" class="control-label">Sale date</label>
                <input type="date" name="sale_date" class="form-control">
            </div> 
            <div class="form-group mb-3">
                <label for="" class="control-label">Description</label>
                <textarea type="text" name="description" class="form-control" placeholder="Add Description" rows="8">
                </textarea>
            </div> 
            <div class="form-group mb-3">
                <label for="" class="control-label">Image</label>
                <input type="text" name="thumb" class="form-control" placeholder="Add Image">
            </div> 
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success">
                    Save new Comics
                </button>
            </div>
        </form>
    </div>
</div>
@endsection