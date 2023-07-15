@extends('components.admin')

@section('content')

<div class="card">
    <div class="row text-center justify-content-center mt-3">
        <h3>Add Product</h3>
    </div>
    <div class="row text-center justify-content-center ">
        <div class="col-sm-6">
            <form action="/addproduct" enctype="multipart/form-data" class="form">
                @csrf
                @method("POST")

                <div class="m-3"><textarea name="name" id="" placeholder="Product Name"
                        class="form-control @error('name') is-invalid @enderror">{{old('name')}}</textarea>
                    @error('name')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>

                <div class="m-3"><textarea name="desc" id="" placeholder="Description"
                        class="form-control @error('desc') is-invalid @enderror">{{old('desc')}}</textarea>
                    @error('desc')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="m-3"><input type="number" name="price" value="{{old('price')}}" placeholder="Price"
                        class="form-control  @error('price') is-invalid @enderror">
                    @error('price')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>

                <div class="m-3"><input type="file" name="pro_image" value="{{old('pro_image')}}"
                        placeholder="Product Image" class="form-control @error('pro_image') is-invalid @enderror">
                    @error('pro_image')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>

                <div class="m-3"><select name="categoryId" class="form-control">
                        <option value="">Select Category</option>

                        @foreach ($product_categories as $category)
                        <option value='{{$category->id}}'>{{$category->category}}</option>
                        @endforeach

                    </select>
                    @error('category')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>

                <div class="m-3"><input type="submit" name="submit" class="btn btn-primary" value="Add Product">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection