@extends('layouts.dashboard')

@section('title')
  Store Dashboard Page
@endsection

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          Dashboard
        </h2>
        <p class="dashboard-subtitle">
          Look what you have made today!
        </p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 px-4 py-2">
              <div class="dashboard-card-title">
                Customer
              </div>
              <div class="dashboard-card-subtitle">
                {{ $customer }}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 px-4 py-2">
              <div class="dashboard-card-title">
                Revenue
              </div>
              <div class="dashboard-card-subtitle">
                ${{ number_format($revenue) }}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 px-4 py-2">
              <div class="dashboard-card-title">
                Transactions
              </div>
              <div class="dashboard-card-subtitle">
                {{ number_format($transaction_count) }}
              </div>
            </div>
          </div>
        </div>
        <div class="row recent-transactions">
          <div class="col-12 mt-2">
            <h5 class="mb-3">
              Recent Transactions
            </h5>
            @forelse ($transaction_data as $transaction)
              <a href="" class="card card-list d-block mb-3 py-2">
                <div class="row">
                  <div class="col-lg-1">
                    <img src="{{ Storage::url($transaction->product->image->first()->file_name) }}" class="w-75" alt="">
                  </div>
                  <div class="col-lg-3 product">
                    {{ $transaction->product->name }}
                  </div>
                  <div class="col-lg-4 name">
                    {{ $transaction->product->user->name }}
                  </div>
                  <div class="col-lg-3 date">
                    12 Desember 2022
                  </div>
                  <div class="col-lg-1 icon">
                    <img src="/images/dashboard-arrow-right.svg" alt="">
                  </div>
                </div>
              </a>
            @empty
              <div class="row">
                <div class="col-12">
                  Empty
                </div>
              </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
