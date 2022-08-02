@extends('layouts.admin')

@section('title')
  Edit User Dashboard
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
                Edit Category
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
                  <form action="{{ route('user.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="name"
                            value={{ $item->name }}
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
                            value={{ $item->email }}
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <small><br>kosongi jika tidak ingin diganti</small>
                          <input
                            type="password" 
                            class="form-control" 
                            id="password" 
                            name="password"
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
                            <option value="ADMIN" selected={{ $item->roles === 'ADMIN' ? true : "" }}>ADMIN</option>
                            <option value="USER" selected={{ $item->roles === 'USER' ? true : "" }}>USER</option>
                          </select>
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