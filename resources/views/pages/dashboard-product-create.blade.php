@extends('layouts.dashboard')

@section('title')
  Store Dashboard Create Product Page
@endsection

@section('content')
  <div class="section-content section-dashboard-settings" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          Create New Product
        </h2>
        <p class="dashboard-subtitle">
          Create your own product
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
                  <div class="col-12">
                    <div class="form-group">
                      <label>Thumnails</label>
                      <input
                        type="file"
                        class="form-control editor"
                        aria-describedby="thumnails"
                        name="thumnails"
                        id="thumnails"
                      >
                      <small class="text-muted">
                        Kamu dapat memilih lebih dari satu file
                      </small>
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
      </div>
    </div>
  </div>    
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush