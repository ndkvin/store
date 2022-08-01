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
            <h2 class="dashboard-title">User</h2>
            <p class="dashboard-subtitle">
                Create New User
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
                  <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="name">User Name</label>
                          <input
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="name"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input
                            type="email" 
                            class="form-control" 
                            id="email" 
                            name="email"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input
                            type="password" 
                            class="form-control" 
                            id="password" 
                            name="password"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="roles">Role</label>
                          <select 
                            class="form-control" 
                            id="roles" 
                            name="roles"
                            required
                          >
                            <option value="ADMIN">ADMIN</option>
                            <option value="USER">USER</option>
                          </select>
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