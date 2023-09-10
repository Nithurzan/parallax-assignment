@extends('layout.layout')
@section('content')

    <div class="card">
        <div class="card-header">Category Edit</div>
        <div class="card-body">

            <form action="{{ url('category/' . $editCategory->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $editCategory->id }}" id="id" />

                <div class="mb-2">
                    <label>Name</label><br />
                    <input type="text" name="name" id="name" value="{{ $editCategory->name }}"
                        class="form-control  @error('name') is-invalid @enderror">
                    @error('name')
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
