@extends('layout.layout')
@section('content')

    <div class="card">
        <div class="card-header">Product Edit</div>
        <div class="card-body">

            <form action="{{ url('product/' . $editProduct->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <div class="mb-2">
                    <input type="hidden" name="id" id="id" value="{{ $editProduct->id }}" id="id" />
                    <label>Name</label><br />
                    <input type="text" name="name" id="name" value="{{ $editProduct->name }}"
                        class="form-control  @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-2">
                    <label>Category</label><br />
                    <select class="form-control  @error('category') is-invalid @enderror"" id="category" name="category"
                        required>
                        <option value="" disabled selected>Select category</option>

                        @foreach ($catgories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $editProduct->category_id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-2">
                    <label>price</label><br />
                    <input type="number" value="{{ $editProduct->price }}" name="price" step="0.01" min="0"
                        id="price" class="form-control  @error('price') is-invalid @enderror">
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="submit" value="Update" class="btn btn-success"><br />
            </form>

        </div>
    </div>

@stop
