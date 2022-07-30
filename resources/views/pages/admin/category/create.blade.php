@extends('layouts.admin')

@section('title')
  Create Category Dashboard
@endsection

@section('content')
<!-- Section Content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Catrgory</h2>
            <p class="dashboard-subtitle">
                Create New Category
            </p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            @if($errors->any())
              <div class="alert alert-anger">
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
                  <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ route('category.store') }}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="name">Category Name</label>
                          <input
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="name"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="image">Category Image</label>
                          <input
                            type="file" 
                            class="form-control" 
                            id="image" 
                            name="image"
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