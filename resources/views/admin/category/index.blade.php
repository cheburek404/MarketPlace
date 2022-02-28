@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All categories</h1>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <h4>{{ session('success') }}</h4>
                    </div>
                @endif
            </div>
        </div>
        <section class="content">
            <div class="card">
                <div class="card-body p-0" style="display: block;">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">ID</th>
                            <th style="width:20%">Category</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category['id'] }}</td>
                                <td>{{ $category['name_of_category'] }}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form action="{{ route('category.destroy', $category['id']) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm delete-btn">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
