@extends('components.admin')

@section('content')

<div class="card">
    <div class="row text-center justify-content-center mt-3">
        <h3>Update Category</h3>
    </div>
    <div class="row text-center justify-content-center ">
        <div class="col-sm-6">
            <form action='/update-category/{{$category->id}}' method="">
                @csrf

                <div class="m-3"><input type="text" name="category" value="{{old('category',$category->category)}}"
                        placeholder="Category" class="form-control text-center @error('category') is-invalid @enderror">
                    @error('category')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>

                <div class="m-3"><input type="submit" name="addcategory" class="btn btn-primary" value="Add Category">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection