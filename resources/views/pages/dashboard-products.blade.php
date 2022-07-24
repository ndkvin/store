@extends('layouts.dashboard')

@section('title')
  Store Dashboard Product Page
@endsection

@section('content')
  <div class="section-content section-dashboard-product" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          My Product
        </h2>
        <p class="dashboard-subtitle">
          Manage it well and get money
        </p>      
      </div>
      <div class="dashboard-content container dashboard-setting">
        <div class="row">
          <div class="col-12">
            <a href="/dashboard-add-product.html" class="btn btn-success ml-n3 py-2">
              Add New Product
            </a>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4">
            <a href="/dashboard-product-detail.html" class="card card-product d-block">
              <div class="card-body  ml-n3">
                <img src="/images/product-card-1.png" alt="product image" class="w-100 ml-2">
                <h5 class="product-name">
                  Shirup shiuuu
                </h5>
                <p class="category">
                  food
                </p>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4">
            <a href="/dashboard-product-detail.html" class="card card-product d-block">
              <div class="card-body  ml-n3">
                <img src="/images/product-card-1.png" alt="product image" class="w-100 ml-2">
                <h5 class="product-name">
                  Shirup shiuuu
                </h5>
                <p class="category">
                  food
                </p>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4">
            <a href="/dashboard-product-detail.html" class="card card-product d-block">
              <div class="card-body  ml-n3">
                <img src="/images/product-card-1.png" alt="product image" class="w-100 ml-2">
                <h5 class="product-name">
                  Shirup shiuuu
                </h5>
                <p class="category">
                  food
                </p>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4">
            <a href="/dashboard-product-detail.html" class="card card-product d-block">
              <div class="card-body  ml-n3">
                <img src="/images/product-card-1.png" alt="product image" class="w-100 ml-2">
                <h5 class="product-name">
                  Shirup shiuuu
                </h5>
                <p class="category">
                  food
                </p>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4">
            <a href="/dashboard-product-detail.html" class="card card-product d-block">
              <div class="card-body  ml-n3">
                <img src="/images/product-card-1.png" alt="product image" class="w-100 ml-2">
                <h5 class="product-name">
                  Shirup shiuuu
                </h5>
                <p class="category">
                  food
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
