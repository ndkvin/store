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
              <form action="">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input
                        type="text"
                        class="form-control"
                        aria-describedby="productName"
                        name="name"
                        id="name"
                        value="Paper"
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
                        value="$123,456"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label>Category</label>
                      <select 
                        name="category" 
                        class="form-control"
                        id="category"
                      >
                        <option value="shipping">Shipping</option>
                        <option value="opration">Opration</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea
                        class="editor form-control"
                        id="editor"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="w-100 btn btn-success">Create Product</button>
                  </div>
                </div>
              </form>
            </div> 
          </div>
        </div>

        <div class="card mt-4 px-4 py-4">
          <div class="row">
            <div class="col-md-4">
              <div class="galerry-container">
                <img src="/images/product-card-1.png" class="w-100" alt="product card 1">
                <a href="" class="delete-image">
                  <img src="/images/icon-delete.svg" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="galerry-container">
                <img src="/images/product-card-1.png" class="w-100" alt="product card 1">
                <a href="" class="delete-image">
                  <img src="/images/icon-delete.svg" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="galerry-container">
                <img src="/images/product-card-1.png" class="w-100" alt="product card 1">
                <a href="" class="delete-image">
                  <img src="/images/icon-delete.svg" alt="">
                </a>
              </div>
            </div>
            <div class="col-12 mt-4">
              <input type="file" name="" id="file" style="display: none" multiple>
              <button type="submit" class="w-100 btn btn-success" onclick="thisFileUpload()">Add Image</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addone-script')
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