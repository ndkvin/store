@extends('layouts.admin')

@section('title')
  Add Image Dashboard
@endsection

@section('content')
<!-- Section Content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Image</h2>
            <p class="dashboard-subtitle">
                Add Product Image
            </p>
        </div>
        <div class="dashboard-content">
          <div class="row">
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="products_id">Product Name</label>
                          <select class="form-control" name="products_id" id="categories_id">
                            @foreach($products as $product)
                              <option value={{ $product->id }}>{{ $product->name }}</option>t
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="file_name">Category Image</label>
                          <input
                            type="file" 
                            class="form-control" 
                            id="file_name" 
                            name="file_name"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-right">
                        <button class="btn btn-success px-5">
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection