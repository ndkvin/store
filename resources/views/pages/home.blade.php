@extends('layouts.app')

@section('title')
  Store Home Page
@endsection

@section('content')
  <div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/banner.jpg" class="d-block w-100" alt="image carousel">
                </div>
                <div class="carousel-item">
                  <img src="/images/banner.jpg" class="d-block w-100" alt="image carousel">
                </div>
                <div class="carousel-item">
                  <img src="/images/banner.jpg" class="d-block w-100" alt="image carousel">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div
            class="col-12"
            data-aos="fade-up"
          >
            <h5>
              Trend Categories
            </h5>
          </div>
        </div>
        <div class="row">
          @forelse($categories as $category)
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img 
                    src="{{ Storage::url($category->image) }}"
                    alt="furniture-gadget"
                    class="w-100"   
                  >
                </div>
                <p class="categories-text">
                  {{ $category->name }}
                </p>
              </a>
            </div>
          @empty
            <div 
              class="col-12 text-center py-5" 
              data-aos="fade-up" 
              data-aos-delay="100"
            >
              No Categories Found In Database
            </div>
          @endforelse
        </div>
      </div>
    </section>
    <section class="store-new-product">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>
              New Products
            </h5>
          </div>
        </div>
        <div class="row">
          @php
              $delay = 0;
          @endphp
          @forelse ($products as $product)
            <div 
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="{{ $delay += 100 }}"
            >
              <a href="/detail.html" class="component-products d-block">
                <div class="product-thumbnail">
                  <div 
                    class="product-image" 
                    style="
                      @if($product->image)
                        background-image: url('{{ Storage::url($product->image->first()->file_name) }}');
                      @else
                        background-color: #eee;
                      @endif
                    "
                  ></div>
                </div>
                <p class="product-name">
                  {{ $product->name }}
                </p>
                <p class="product-price">
                  ${{ $product->price }}
                </p>
              </a>
            </div>
          @empty
            <div 
              class="col-12 text-center py-5" 
              data-aos="fade-up" 
              data-aos-delay="100"
            >
              No Product Found In Database
            </div>
          @endforelse

        </div>
      </div>
    </section>
  </div>
@endsection

