@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div>
                @if (\Session::has('flash_message'))
                    <div class="bg-success p-3 mb-3 rounded text-white flash-msg">
                        {{ \Session::get('flash_message') }}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>ABC Company Product Maintaine</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product</th>
                                        <th>Catogery</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category_name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                <a
                                                    href="{{ url('/product/' . $product->id . '/edit') }}"title="Edit product">
                                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i>Edit</button>
                                                </a>

                                                <form method="POST" action="{{ url('/product' . '/' . $product->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete product"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
