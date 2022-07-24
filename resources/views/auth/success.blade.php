@extends('layouts.success')

@section('title')
  Success Page
@endsection

@section('content')
  <div class="page-content success-page">
    <section class="section-success" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center content justify-content-center">
          <div class="col-6 text-center">
            <img class="mb-2" src="/images/success.svg" alt="success icon">
            <h2 class="mb-2">Welcome to Store</h2>
            <p class="text-waiting mb-4">
              Kamu sudah berhasil terdaftar
              bersama kami Let's grow up now.
            </p>
            <div class="text-center">
              <center>
                <a href="#" class="w-50 btn btn-success btn-block">
                  My dashboard
                </a>
              </center>
              <center class="mt-4">
                <a href="#" class="text-secondary w-50 btn btn-light btn-block">
                  Go to Shopping
                </a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
