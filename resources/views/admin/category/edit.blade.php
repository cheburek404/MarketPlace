@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit category</h1>
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
                        <form method="POST" action="{{ route('category.update', $category['id']) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name of category</label>
                                    <input type="text" value="{{ $category['name_of_category'] }}" name="name_of_category" class="form-control">
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

