@extends('layouts.dashboard')

@section('title')
  Store Dashboard Settings Page
@endsection

@section('content')
  <div class="section-content section-dashboard-settings" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          Dashboard Settings
        </h2>
        <p class="dashboard-subtitle">
          Make store that profitable
        </p>      
      </div>
      <div class="container dashboard-setting">
        <div class="card px-4 py-4">
          <div class="row">
            <div class="col-12">
              <form action="{{ route('dashboard-settings-redirect', 'dashboard') }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Nama Toko</label>
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        aria-describedby="productName"
                        value="{{ $store->first()->name }}"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
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
                            {{ $store->first()->category->id == $category->id ? "selected" : "" }}
                          >
                            {{ $category->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-5">Save Now</button>
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