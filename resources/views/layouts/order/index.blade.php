@extends('master')

@section('title')
    Order Page
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header section-header">
                        <h1>Cart Page</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Components</a></div>
                            <div class="breadcrumb-item">Category</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($message = Session::get('pesan'))
            <div class="alert alert-primary">
                <button class="close">
                    <span>&times;</span>
                </button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card card-primary">
                    <form action="{{ route('order.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="card-header">
                            <h4>Pilih Produk</h4>
                        </div>
                        <div class="card-body">
                            <label>Nama Produk</label>
                            <select name="product_id" class="form-control">
                                <option value="0">--Pilih Produk--</option>
                                @foreach ($product as $item)
                                    <option value="{{ $item->id }}">{{ $item->name_product }} - Rp.{{ $item->price }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Nama produk harus diisi!
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="row">
                                <div class="col-11">
                                    <input type="number" name="jumlah" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Cart Order</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah</th>
                                        <th colspan="2">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                        @foreach ($item->cartProduct as $cartProduct)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $cartProduct->name_product }}</td>
                                            <td>{{ $item->jumlah }}</td>
                                            <td>{{ $item->sub_total }}</td>
                                            <td>test</td>
                                        </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="text-right">
                            @if ($cart)
                            <p class="h5">
                                Totsl Harga : IDR {{ $cart->sum('sub_total') }}
                            </p>
                            @else
                            <p class="h5">
                                Totsl Harga : IDR 0
                            </p>
                            @endif
                        </div>
                        <hr>
                    </div>
                    <div class="card-footer text-right">
                        <a href="" class="btn btn-primary">
                            <i class="fas fa-shopping-cart"></i> Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection