@extends('layout.layout')
@section('content')

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Add Product</div>
            <div class="card-body">
                <form action="{{ url('product') }}" method="post">
                    {!! csrf_field() !!}

                    <div class="mb-2">
                        <label>Product Name</label><br />
                        <input type="text" name="name" id="name"
                            class="form-control  @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label>Category</label><br />
                        <select class="form-control  @error('category') is-invalid @enderror" id="catgory"
                            name="category">
                            <option value="" disabled selected>Select category</option>
                            @foreach ($catgories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                            @error('catgory')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </select>
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label>price</label><br />
                        <input type="number" name="price" step="0.01" min="0" id="price"
                            class="form-control  @error('price') is-invalid @enderror">
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="submit" value="Save" class="btn btn-success"><br />
                </form>

            </div>
        </div>
    </div>
@stop
