@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit product</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            <h4>{{ session('success') }}</h4>
                        </div>
                    @endif
                    <div class="card card-primary">
                        <form method="POST" action="{{ route('product.update', $product['id']) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" value="{{ $product['title'] }}" name="title" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" id="description" name="description">{{ $product['description'] }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" value="{{ $product['price'] }}" name="price" class="form-control" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label>Categories</label>
                                    <select class="form-control" value="{{ $product['category'] }}" name="category">
                                        <option>Car</option>
                                        <option>Health</option>
                                        <option>Home</option>
                                        <option>Tourism</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">{{ $product['image'] }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

