@extends('layout.layout')
@section('content')

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Add Category</div>
            <div class="card-body">

                <form action="{{ url('category') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="mb-2">
                        <label>Category</label><br />
                        <input type="text" name="name" id="name"
                            class="form-control  @error('name') is-invalid @enderror">
                        @error('name')
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
