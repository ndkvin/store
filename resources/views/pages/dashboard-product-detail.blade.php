@extends('layouts.dashboard')

@section('title')
  Store Dashboard Detail Product Page
@endsection

@section('content')
  <div class="section-content section-dashboard-settings" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          Shiuuu
        </h2>
        <p class="dashboard-subtitle">
          Product Details
        </p>      
      </div>
      <div class="container dashboard-setting">
        <div class="card px-4 py-4">
          <div class="row">
            <div class="col-12">
              @if($errors->any())
                <div class="alert alert-anger text-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>
                        {{ $error }}
                      </li>
                    @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <div class="col-12">
              <form action="{{ route('dashboard-product-detail-edit', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input
                        type="text"
                        class="form-control"
                        aria-describedby="name"
                        name="name"
                        id="name"
                        value="{{ $product->name }}"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Price</label>
                      <input
                        type="text"
                        class="form-control"
                        aria-describedby="price"
                        name="price"
                        id="price"
                        value="{{ $product->price }}"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label>Category</label>
                      <select 
                        name="categories_id" 
                        class="form-control"
                        id="category"
                      >
                        @foreach($categories as $category)
                          <option 
                            value={{ $category->id }}
                            {{ $product->category->id == $category->id ? "selected" : "" }}
                          >
                            {{ $category->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea
                        class="editor form-control"
                        id="editor"
                        name="description"
                      >{!! $product->description !!}</textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="w-100 btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
            </div> 
          </div>
        </div>

        <div class="card mt-4 px-4 py-4">
          <div class="row">
            @foreach ($product->image as $image)
              <div class="col-md-4 mt-2">
                <div class="galerry-container">
                  <img src="{{ Storage::url($image->file_name) }}" class="w-100" alt="product card 1">
                  <a href="{{ route('dashboard-product-image-delete', $image->id) }}" class="delete-image">
                    <img src="/images/icon-delete.svg" alt="">
                  </a>
                </div>
              </div>
            @endforeach
            <div class="col-12 mt-4 mb-4">
              <div class="col-12">
                <form action="{{ route('dashboard-product-detail-upload-image', $product->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input onchange="form.submit()" class="d-none" type="file" name="thumnails" id="file">
                  <button type="button" class="w-100 btn btn-success" onclick="thisFileUpload()">Add Image</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
  <script>
    const thisFileUpload = () => {
      document.getElementById("file").click()
    }
  </script>
  <script>
    ClassicEditor
    .create( document.querySelector('#editor'))
    .catch( error => {
        console.error( error );
    } );
  </script>
@endpush