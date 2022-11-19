@extends('master')

@section('title')
    Product Page
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header section-header">
                        <h1>Add Product</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Components</a></div>
                            <div class="breadcrumb-item">Add Product</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('product.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <td>Product Name</td>
                                    <td><input type="text" name="name_product" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="text" name="description" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>Stock</td>
                                    <td><input type="text" name="stock" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><input type="text" name="price" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>
                                        <select name="category_id" class="form-control">
                                            <option value="">--Pilih Category--</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->name_category }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>$nbsp;</td>
                                    <td><button type="submit" class="btn btn-primary">Save</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection