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
                        <h1>Edit Product</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Components</a></div>
                            <div class="breadcrumb-item">Edit Product</div>
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
                        <form action="{{ route('product.update', $product->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <table class="table table-bordered">
                                <tr>
                                    <td>Product Name</td>
                                    <td><input type="text" name="name_product" class="form-control" value="{{ $product->name_product }}"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="text" name="description" class="form-control" value="{{ $product->description }}"></td>
                                </tr>
                                <tr>
                                    <td>Stock</td>
                                    <td><input type="text" name="stock" class="form-control" value="{{ $product->stock }}"></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><input type="text" name="price" class="form-control" value="{{ $product->price }}"></td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>
                                        <select name="category_id" class="form-control">
                                            <option value="">--Pilih Category--</option>
                                            @foreach ($category as $item)
                                                @if ($product->category_id == $item->id)
                                                    <option value="{{ $item->id }}" selected>{{ $item->name_category }}</option>
                                                @else
                                                    <option value="{{ $item->id }}">{{ $item->name_category }}</option>
                                                @endif
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