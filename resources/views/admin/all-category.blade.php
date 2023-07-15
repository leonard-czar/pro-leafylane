@extends('components.admin')
@section('content')

<div class="row justify-content-center">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center mb-5">All Category</h4>
        <div class="table-responsive">
          <table class="table text-center">
            <thead>
              <tr>
                <th>S/N</th>
                <th>ID</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $kanta = 1;
              @endphp
              @foreach ($category as $value)
              <tr>
                <td> {{$kanta++}}</td>
                <td>{{$value->id}}</td>
                <td> {{$value->category}} </td>

                <td>
                  <form action="/get-category/{{$value->id}}" method="get">
                    @csrf
                    <button type="submit" class='btn btn-outline-warning btn-sm edit-button'>Update</button>

                  </form>

                  <form action="/delete-category/{{$value->id}}" method="post" onsubmit="validateDelete(event)">
                    @csrf
                    <input type="submit" class='btn btn-outline-danger btn-sm m-2' name="btndelete" value="Delete">
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
  <div class="col-4 m-3">
    <a href="/cat" class="btn form-control" style="background-color:#2274A5;color:white">Add Category</a>
  </div>
</div>

@endsection