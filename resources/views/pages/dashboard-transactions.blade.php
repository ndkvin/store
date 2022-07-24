@extends('layouts.dashboard')

@section('title')
  Store Dashboard Transactions Page
@endsection

@section('content')
  <div class="section-content section-dashboard-transactions" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          Transactions
        </h2>
        <p class="dashboard-subtitle">
        Big result start from the small one
        </p>
      </div>
      <div class="dashboard-content">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#buy" role="tab" aria-controls="pills-home" aria-selected="true">Sell Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#sell" role="tab" aria-controls="pills-profile" aria-selected="false">Buy Product</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="se;;" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row recent-transactions">
              <div class="col-12 mt-2">
                <h5 class="mb-3">
                  Recent Transactions
                </h5>
                <a href="" class="card card-list d-block mb-3 py-2">
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/images/dashboard-icon-product-1.png" alt="">
                    </div>
                    <div class="col-lg-3 product">
                      Shirup majj
                    </div>
                    <div class="col-lg-4 name">
                      Joko Tri Budi
                    </div>
                    <div class="col-lg-3 date">
                      12 Desember 2022
                    </div>
                    <div class="col-lg-1 icon">
                      <img src="/images/dashboard-arrow-right.svg" alt="">
                    </div>
                  </div>
                </a>
                <a href="" class="card card-list d-block mb-3 py-2">
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/images/dashboard-icon-product-1.png" alt="">
                    </div>
                    <div class="col-lg-3 product">
                      Shirup majj
                    </div>
                    <div class="col-lg-4 name">
                      Joko Tri Budi
                    </div>
                    <div class="col-lg-3 date">
                      12 Desember 2022
                    </div>
                    <div class="col-lg-1 icon">
                      <img src="/images/dashboard-arrow-right.svg" alt="">
                    </div>
                  </div>
                </a>
                <a href="" class="card card-list d-block mb-3 py-2">
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/images/dashboard-icon-product-1.png" alt="">
                    </div>
                    <div class="col-lg-3 product">
                      Shirup majj
                    </div>
                    <div class="col-lg-4 name">
                      Joko Tri Budi
                    </div>
                    <div class="col-lg-3 date">
                      12 Desember 2022
                    </div>
                    <div class="col-lg-1 icon">
                      <img src="/images/dashboard-arrow-right.svg" alt="">
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="pills-profile-tab">
            .....
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('addone-acript')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endsection