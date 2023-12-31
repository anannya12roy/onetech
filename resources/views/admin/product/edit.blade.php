@extends('admin.master')
@section('admin.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:rgb(0, 138, 202);font-size:25px; text-align:center;">Edit Product</h4>
        <p class="card-description">
            Please fill out the form below.
        </p>
        <form id="contact-form" role="form" action="{{url('/update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Product Category</label>
              <select class="form-control" name="category">
                <option>{{$product->category}}</option>
                @foreach ($categories as $category)
                <option value="{{$category->name}}">{{$category->name}}</option>
                @endforeach

              </select>


            </div>
            <div class="form-group">
                <label for="exampleSelectGender">Product Size</label>
                  <select class="form-control" name="size">
                    <option>{{$product->size}}</option>
                    @foreach ($sizes as $size)
                            <option value="{{$size->name}}">{{$size->name}}</option>
                    @endforeach
                  </select>
            </div>

            <div class="form-group">
                <label for="exampleSelectGender">Product Color</label>
                <select class="form-control" name="color">
                    <option>{{$product->color}}</option>
                    @foreach ($colors as $color)
                        <option value="{{$color->color}}">{{$color->color}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" name="price"  value="{{$product->price}}">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="">Discount Price</label>
                <input type="text" class="form-control" name="discountprice"  value="{{$product->discount_price}}">

            </div>

            {{-- <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" id="exampleTextarea1" rows="4">{{$product->description}}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div> --}}

            <div class="form-group">
              <label for="exampleInputName1"><b>Second Description :</b></label>
              <textarea type="text" id="editor" class="form-control" name="description" value="">{{$product->description}}</textarea>
          </div>

          <div class="form-group">
            <label>Image</label>
            <input name="file[]" type="file" class="form-control"  multiple>
            @error('file')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          </div>
          <div class="form-group">
            <label>Status</label>

            <select class="form-control" name="status">
                <option value="1" {{$product->status=='1' ? 'selected' : ''}}>Active</option>
                <option value="0" {{$product->status=='0' ? 'selected' : ''}}>Inactive</option>
            </select>

        </div>
        <div class="form-group">
            <label>Black Friday</label>
            <select class="form-control" name="hot_deal">
                <option value="1" {{$product->hot_deal=='1' ? 'selected' : ''}}>Active</option>
                <option value="0" {{$product->hot_deal=='0' ? 'selected' : ''}}>Inactive</option>
            </select>

        </div>

          <button type="submit" class="btn btn-primary me-2">Submit</button>

        </form>
      </div>
    </div>
  </div>
  @endsection
