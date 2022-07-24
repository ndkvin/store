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
              <form action="">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Nama Toko</label>
                      <input
                        type="text"
                        class="form-control"
                        aria-describedby="productName"
                        value="Jaya Abadi"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Kategory</label>
                      <input
                        type="text"
                        class="form-control"
                        aria-describedby="productName"
                        value="foods"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input 
                        type="password" 
                        class="form-control" 
                        aria-describedby="password"
                        value="foasdasdasdods"
                      />
                    </div>
                    <div class="form-group">
                      <label>Store Status</label>
                      <p class="text-muted">
                        Apakah saat ini toko anda buka?
                      </p>
                      <div
                        class="custom-control custom-radio custom-control-inline"
                      >
                        <input
                          class="custom-control-input"
                          type="radio"
                        ></input>
                        <label class="custom-control-label">
                          Buka
                        </label>
                      </div>
                      <div
                        class="custom-control custom-radio custom-control-inline"
                      >
                        <input
                          class="custom-control-input"
                          type="radio"
                        ></input>
                        <label
                          makasih
                          class="custom-control-label"
                          >Sementara tutup</label
                        >
                      </div>
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