@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add product</h1>
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
                        <form method="POST" action="{{ route('product.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Categories</label>
                                    <select class="form-control" name="category">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category['id'] }}">{{ $category['name_of_category'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="feature_image">File input</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="image" class="form-control" id="feature_image" readonly>
                                    <a href="" class="popup_selector btn btn-light mt-2" data-inputid="feature_image">Choose file</a>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

