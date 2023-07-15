@extends('components.admin')

@section('content')
<div class="container">

    <div class="row text-center justify-content-center m-5">
        <h3>Add a Product</h3>
        <div class="col-sm-6">
            <form action="{{route('addproduct')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="m-sm-3"><textarea name="name" id="" placeholder="Product Name" class="form-control"
                        require>{{old('name')}}</textarea>
                    @error('name')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="m-sm-3"><textarea name="desc" id="" placeholder="Description"
                        class="form-control">{{old('desc')}}</textarea>
                    @error('desc')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="m-sm-3"><input type="number" name="price" value="{{old('price')}}" placeholder="Price"
                        class="form-control">
                    @error('price')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>

                <div class="m-sm-3"><input type="file" name="watch_image" value="{{old('image')}}"
                        placeholder="Product Image" class="form-control">
                    @error('image')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="m-sm-3"><select name="category" class="form-control" required>
                        <option value="">Select Category</option>

                        @foreach ($brands as $value)
                        <option value='{{$value->id}}'>{{$value->category}}</option>";
                        @endforeach

                    </select>
                    @error('category')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
                </div>
                <div class="m-sm-3"><input type="submit" name="" id="" class="btn btn-primary form-control"
                        value="Add Product"></div>
            </form>
        </div>
    </div>
</div>

@endsection