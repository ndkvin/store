@extends('layouts.admin')

@section('title')
  Edit Product Dashboard
@endsection

@section('content')
<!-- Section Content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Product</h2>
            <p class="dashboard-subtitle">
                Edit Product
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
                  <form action="{{ route('product.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="name">Product name</label>
                          <input
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="name"
                            value="{{ $data->name }}"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="owner">Owner</label>
                          <select class="form-control" name="users_id" id="owner">
                            @foreach($users as $user)
                              <option 
                                value="{{ $user->id }}"
                                {{ $data->user->id == $user->id ? "selected" : "" }}>{{ $user->name }}
                              </option>t
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="category">Category</label>
                          <select class="form-control" name="categories_id" id="category">
                            @foreach($categories as $category)
                              <option 
                                value={{ $category->id }}
                                {{ $data->category->id == $category->id ? "selected" : "" }}
                              >
                                {{ $category->name }}
                              </option>t
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="price">price Name</label>
                          <input
                            type="number" 
                            class="form-control" 
                            id="price" 
                            name="price"
                            value={{ $data->price }}
                            required
                          />
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="description" id="editor">  
                              {{ $data->description }}
                            </textarea>
                          </div>
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

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush