@extends('layouts.dashboard')

@section('title')
  Store Dashboard Detail Transactions Page
@endsection

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          Transaction
        </h2>
        <p class="dashboard-subtitle">
          Transaction detail
        </p>
      </div>
      <div class="dashboard-content container" id="transactionDetail">
        <div class="row">
          <div class="col-12">
            <div class="card py-4 px-4">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img src="/images/product-details-dashboard.png" alt="" class="w-75">
                </div>
                <div class="col-12 col-md-8 pl-4">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 col-md-6 mt-4">
                        <div class="product-title">
                          Customer Name
                        </div>
                        <div class="product-subtitle">
                          Joko
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mt-4">
                        <div class="product-title">
                          Product Name
                        </div>
                        <div class="product-subtitle">
                          Shyii
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mt-4">
                        <div class="product-title">
                          Date of Transaction
                        </div>
                        <div class="product-subtitle">
                          21 Jul 2022
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mt-4">
                        <div class="product-title">
                          Paymemt Status
                        </div>
                        <div class="product-subtitle text-danger">
                          Pending
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mt-4">
                        <div class="product-title">
                          Total Amount
                        </div>
                        <div class="product-subtitle">
                          $123,456
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mt-4">
                        <div class="product-title">
                          Mobile Phone
                        </div>
                        <div class="product-subtitle">
                          +621234567890
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row shipping-information">
                <div class="col-12 col-md-6">
                  <div class="row">
                    <div class="col-12 my-4 mt-4">
                      <h5 class="title">
                        Shipping Information
                      </h5>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                      <div class="product-title">
                        Address I
                      </div>
                      <div class="product-subtitle">
                        Jakarta
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                      <div class="product-title">
                        Address II
                      </div>
                      <div class="product-subtitle">
                        Jl. Jalan nomer 12
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                      <div class="product-title">
                        Province
                      </div>
                      <div class="product-subtitle">
                        West Java
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                      <div class="product-title">
                        City
                      </div>
                      <div class="product-subtitle">
                        Bandung
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                      <div class="product-title">
                        Postal Code
                      </div>
                      <div class="product-subtitle">
                        12345
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                      <div class="product-title">
                        Country
                      </div>
                      <div class="product-subtitle">
                        Indonesia
                      </div>
                    </div>
                    <div class="col-12 mt-4">
                      <label for="">Shipping Status</label>
                      <select 
                        name="status" 
                        id="status"
                        v-model="status"
                        class="form-control"
                      >
                        <option value="UNPAID">Unpaid</option>
                        <option value="PENDING">Pending</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                      </select>
                    </div>
                    <div class="row ml-1" v-if="status == 'SHIPPING'">
                      <div class="col-md-6 mt-4">
                        <div class="product-title">
                          Input Resi
                        </div>
                        <input
                          class="form-control"
                          type="text"
                          name="resi"
                          id="openStoreTrue"
                          v-model="resi"
                        />
                      </div>
                      <div class="col-md-4 mt-4">
                        <button
                          type="submit"
                          class="btn btn-success btn-block mt-4"
                        >
                          Update Resi
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col text-right">
                  <button type="submit" class="btn btn-success px-5">Save Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addone-script')
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var transactionDetail = new Vue({
      el: "#transactionDetail",
      data: {
        status: "SHIPPING",
        resi: "BDO12308012132",
        is_store_open: true,
      },
    });
  </script>
  </script>
@endpush