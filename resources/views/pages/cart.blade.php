@extends('layouts.app')

@section('title')
  Store Cart Page
@endsection

@section('content')
  <div class="page-content page-cart">
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
                  Cart
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="items-table">
      <div class="container">
        <div class="row" data-aos="fade-up" delay="100">
          <div class="col-12">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col" style="width: 20%;">Image</th>
                  <th scope="col" style="width: 35%;">Name & Seller</th>
                  <th scope="col" style="width: 30;">Price</th>
                  <th scope="col" style="width: 15%;">Menu</th>
                </tr>
              </thead>
              <tbody>
                @php
                   $total = 0; 
                @endphp
                @forelse ($carts as $cart)
                  <tr class="item-row">
                    <td style="width: 20%;">
                      <img
                        src="{{ Storage::url($cart->product->image->first()->file_name) }}"
                        alt="item image"
                        class="cart-image"
                      >
                    </td>
                    <td style="width: 35%;" class=" align-middle">
                      <div class="item-name">
                        {{ $cart->product->name }}
                      </div>
                      <div  class="owner">
                        By {{ $cart->product->user->name }}
                      </div>
                    </td>
                    <td style="width: 30%;"  class=" align-middle">
                      <div class="price">
                        $ {{ number_format($cart->product->price) }}
                      </div>
                      <div class="currency">
                        USD
                      </div>
                    </td>
                    <td style="width: 15%;"  class=" align-middle">
                      <form action="{{ route('cart-delete',  $cart->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button
                          class="btn btn-remove-cart "
                        >
                          Remove
                        </button>
                      </form>
                    </td>
                  </tr>
                  @php
                    $total += $cart->product->price;
                  @endphp
                @empty
                  <tr class="item-row">
                    <td>Data Cart Masih Kosong</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
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
        </div>
        <div class="row shipping" data-aos="fade-up" delay="150">
          <div class="col-12" >
            <hr />
          </div>
          <div class="col-12 mb-4">
            <h2>Shipping Details</h2>
          </div>
        </div>
        <form action="{{ route('checkout', $total) }}" method="POST" id="location">
          @csrf
          <div class="row mb-2" data-aos="fade-up" delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="address_one">Address 1</label>
                <input
                  type="text" 
                  class="form-control" 
                  id="address_one" 
                  name="address_one"
                  value="Sentra Duta Cemara"
                  >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="address_two">Address 2</label>
                <input
                  type="text" 
                  class="form-control" 
                  id="address_two" 
                  name="address_two"
                  value="Sentra Duta Cemara"
                  >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="procinces_id">Province</label>
                <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces">
                  <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="regencies_id">City</label>
                <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id" v-if="regencies">
                  <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="zip_code">Postal Code</label>
                <input
                  type="text" 
                  class="form-control" 
                  id="zip_code" 
                  name="zip_code"
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
                <label for="phone_number">Mobile Phone</label>
                <input
                  type="text" 
                  class="form-control" 
                  id="phone_number" 
                  name="phone_number"
                  value="+628123456789"
                  >
              </div>
            </div>
          </div>
          <div class="row payment" data-aos="fade-up" delay="250">
            <div class="col-12">
              <h2>
                Payment Information
              </h2>
            </div>
            <div class="col-4 col-md-2 mt-4">
              <div class="product-subtitle">
                $10
              </div>
              <div class="product-title">
                Country Tax
              </div>
            </div>
            <div class="col-4 col-md-3 mt-4">
              <div class="product-subtitle">
                $280
              </div>
              <div class="product-title">
                Product Insurence
              </div>
            </div>
            <div class="col-4 col-md-2 mt-4">
              <div class="product-subtitle">
                $280
              </div>
              <div class="product-title">
                Ship to Jakarta
              </div>
            </div>
            <div class="col-4 col-md-2 mt-4">
              <div class="product-subtitle text-success">
                $ {{ $total ? number_format($total) : 0 }}
              </div>
              <div class="product-title">
                Total
              </div>
            </div>
            <div class="col-8 col-md-3 mt-4">
              <button type="submit" class="btn btn-success px-4 btn-block">Checkout Now</a>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
@endsection

@push('addon-script')
  <script src="/vendor/vue/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
     var locations = new Vue({
        el: "#location",
        mounted() {
          AOS.init();
          this.getProvincesData();
        },
        data: {
          provinces: null,
          regencies: null,
          provinces_id: null,
          regencies_id: null,
        },
        methods: {
          getProvincesData() {
            var self = this;
            axios.get('{{ url('api/provinces') }}')
              .then(function (response) {
                console.log(response)
                  self.provinces = response.data;
              })
          },
          getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
              .then(function (response) {
                  self.regencies = response.data;
              })
          },
        },
        watch: {
          provinces_id: function (val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
          },
        }
      });
    </script>
@endpush