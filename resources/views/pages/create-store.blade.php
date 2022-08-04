@extends('layouts.dashboard')

@section('title')
  Store Dashboard Create Store Page
@endsection

@section('content')
  <div class="section-content section-dashboard-settings" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          Create Store
        </h2>
        <p class="dashboard-subtitle">
          Create your own store
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
              <form action="{{ route('create-store.store') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for='name'>Store Name</label>
                      <input
                        type="text"
                        class="form-control"
                        aria-describedby="productName"
                        name="name"
                        id="name"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for='categories_id'>Kategori</label>
                      <select name="categories_id" class="form-control">
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}" >{{ $category->name }}</option>
                        @endforeach
                      </select>
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