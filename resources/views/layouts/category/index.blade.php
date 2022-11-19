@extends('master')

@section('title')
    Category Page
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header section-header">
                        <h1>Category Page</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Components</a></div>
                            <div class="breadcrumb-item">Category</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
                    </div>
                    <div class="card-body">
                        <div class="table table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th width="150px" class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($category as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name_category }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6 text-center">
                                                        <a href="{{ route('category.edit', $item->id) }}" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <form action="{{ route('category.destroy', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">Tidak Ada Data Category</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection