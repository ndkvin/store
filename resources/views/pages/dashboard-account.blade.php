@extends('layouts.dashboard')

@section('title')
  Store Dashboard Settings Page
@endsection

@section('content')
  <div class="section-content section-dashboard-setting" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          My Account
        </h2>
        <p class="dashboard-subtitle">
          Update your current profile
        </p>      
      </div>
      <div class="container dashboard-setting">
        <div class="card px-4 py-4">
          <div class="row">
            <div class="col-12">
              <div class="form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Your Name</label>
                      <input
                        type="text" 
                        class="form-control" 
                        id="addressOne" 
                        name="name"
                        value="Sentra Duta Cemara"
                        >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Your Email</label>
                      <input
                        type="email" 
                        class="form-control" 
                        id="email" 
                        name="email"
                        value="Sentra Duta Cemara"
                        >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="addressOne">Address 1</label>
                      <input
                        type="text" 
                        class="form-control" 
                        id="addressOne" 
                        name="addressOne"
                        value="Sentra Duta Cemara"
                      >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="addressTwo">Address 2</label>
                      <input
                        type="text" 
                        class="form-control" 
                        id="addressTwo" 
                        name="addressTwo"
                        value="Sentra Duta Cemara"
                        >
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Province">Province</label>
                      <input
                        type="text" 
                        class="form-control" 
                        id="Province" 
                        name="Province"
                        value="West Java"
                        >
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="city">City</label>
                      <input
                        type="text" 
                        class="form-control" 
                        id="city" 
                        name="city"
                        value="Bandung"
                        >
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="postalCode">Postal Code</label>
                      <input
                        type="text" 
                        class="form-control" 
                        id="postalCode" 
                        name="postalCode"
                        value="123456"
                        >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="country">Country</label>
                      <input
                        type="text" 
                        class="form-control" 
                        id="country" 
                        name="country"
                        value="Indonesia"
                        >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="mobilePhone">Mobile Phone</label>
                      <input
                        type="text" 
                        class="form-control" 
                        id="mobilePhone" 
                        name="mobilePhone"
                        value="+628123456789"
                      >
                    </div>
                  </div>
                </div>
                <div class="row">
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
  </div>
@endsection