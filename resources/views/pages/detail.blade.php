@extends('layouts.app')

@section('title')
  Store Detail Page
@endsection

@section('content')
  <div class="page-content page-detail">
    <section class="store-breadcrumb">
      <div class="container">
        <div class="row">
          <div class="col-12 bg-transparent">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  Product Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="store-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img 
                v-bind:src="photos[activePhoto].url" 
                :key="photos[activePhoto].url" 
                alt="detail image"
                class="w-100 main-image"
              >
            </transition>
          </div>
          <div class="col-lg-2">
            <div class="row">
              <div 
                class="col-3 col-lg-12 mt-4 mb-lg-3 mt-lg-0" 
                v-for="(photo, index) in photos"
                :key="photo.id"
                data-aos="zoom-in"
                data-aos-delay="100"
              >
                <a href="#" 
                  @click="changeActiveId(index)">
                  <img 
                    :src="photo.url" 
                    alt="image"
                    class="w-100 thumbnail-image"
                    :class="{ active : index == activePhoto }"
                  >
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="detail-page-container mt-4" data-aos="fade-up" delay="100">
      <section class="store-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 tag">
              <h1 class="name">
                Sofa Ternyaman
              </h1>
              <p class="owner mt-n2">
                By Andika Kavin
              </p>
              <p class="price mt-n2">
                $ 1409
              </p>
            </div> 
            <div class="col-lg-2 add-to-chart mt-n1 mt-lg-0">
              <a href="/cart.html" type="button" class="btn btn-success w-100 btn-block">
                Add to Chart
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 description mt-4 mt-lg-0">
              <p>
                The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge.
              </p>
              <p>
                Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning underfoot adds unparalleled comfort while transparent mesh and vibrantly coloured details on the upper are blended with timeless OG features for an edgy, modernised look.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="customer-review">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h5 class="title">
                Customer Review (3)
              </h5>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 review-body">
              <ul class="list-unstyled">
                <li class="media review-item">
                  <img
                    src="/images/icons-testimonial-1.png" 
                    alt="user review profile"
                    class="testimoni-image rounded-circle mt-2"
                  >
                  <div class="review-text">
                    <h5 class="name">
                      Hazza Risky
                    </h5>
                    <p class="review-content">
                      I thought it was not good for living room. I really happy to decided buy this product last week now feels like homey.
                    </p>
                  </div>
                </li>
                <li class="media review-item">
                  <img
                    src="/images/icons-testimonial-1.png" 
                    alt="user review profile"
                    class="testimoni-image rounded-circle mt-2"
                  >
                  <div class="review-text">
                    <h5 class="name">
                      Hazza Risky
                    </h5>
                    <p class="review-content">
                      I thought it was not good for living room. I really happy to decided buy this product last week now feels like homey.
                    </p>
                  </div>
                </li>
                <li class="media review-item">
                  <img
                    src="/images/icons-testimonial-1.png" 
                    alt="user review profile"
                    class="testimoni-image rounded-circle mt-2"
                  >
                  <div class="review-text">
                    <h5 class="name">
                      Hazza Risky
                    </h5>
                    <p class="review-content">
                      I thought it was not good for living room. I really happy to decided buy this product last week now feels like homey.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
        </div>
      </section>
    </div>
  </div>
@endsection


@push('addone-script')
  <script src="/vendor/vue/vue.js"></script>
  <script>
    const vue = new Vue({
      el: "#gallery",
      mounted() {
        AOS.init();
      },
      data: {
        activePhoto: 0,
        photos: [
          {
            id: 1,
            url: "/images/product-details-1.jpg"
          },
          {
            id: 2,
            url: "/images/product-details-2.jpg"
          },
          {
            id: 3,
            url: "/images/product-details-3.jpg"
          },
          {
            id: 4,
            url: "/images/product-details-4.jpg"
          }
        ]
      },
      methods: {
        changeActiveId(id) {
          this.activePhoto = id
        }
      }
    });
  </script>
@endpush
