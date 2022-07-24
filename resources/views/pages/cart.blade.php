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
                <tr class="item-row">
                  <td style="width: 20%;">
                    <img
                      src="/images/products-tatakan-gelas.jpg"
                      alt="item image"
                      class="cart-image"
                    >
                  </td>
                  <td style="width: 35%;" class=" align-middle">
                    <div class="item-name">
                      Sofa Ternyaman
                    </div>
                    <div  class="owner">
                      By Andi Sukko
                    </div>
                  </td>
                  <td style="width: 30%;"  class=" align-middle">
                    <div class="price">
                      $ 1,234
                    </div>
                    <div class="currency">
                      USD
                    </div>
                  </td>
                  <td style="width: 15%;"  class=" align-middle">
                    <a href="#" class="btn btn-remove-cart ">Remove</a>
                  </td>
                </tr>
                <tr class="item-row">
                  <td style="width: 20%;">
                    <img
                      src="/images/products-tatakan-gelas.jpg"
                      alt="item image"
                      class="cart-image"
                    >
                  </td>
                  <td style="width: 35%;"  class=" align-middle">
                    <div class="item-name">
                      Sofa Ternyaman
                    </div>
                    <div class="owner">
                      By Andi Sukko
                    </div>
                  </td>
                  <td style="width: 30%;"  class=" align-middle">
                    <div class="price">
                      $ 1,234
                    </div>
                    <div class="currency">
                      USD
                    </div>
                  </td>
                  <td style="width: 15%;"  class="align-middle">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
                <tr class="item-row">
                  <td style="width: 20%;">
                    <img
                      src="/images/products-tatakan-gelas.jpg"
                      alt="item image"
                      class="cart-image"
                    >
                  </td>
                  <td style="width: 35%;"  class=" align-middle">
                    <div class="item-name">
                      Sofa Ternyaman
                    </div>
                    <div class="owner">
                      By Andi Sukko
                    </div>
                  </td>
                  <td style="width: 30%;"  class=" align-middle">
                    <div class="price">
                      $ 1,234
                    </div>
                    <div class="currency">
                      USD
                    </div>
                  </td>
                  <td style="width: 15%;"  class="align-middle">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row shipping" data-aos="fade-up" delay="150">
          <div class="col-12" >
            <hr />
          </div>
          <div class="col-12 mb-4">
            <h2>Shipping Details</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-up" delay="200">
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
              <label for="addresstwo">Address 2</label>
              <input
                type="text" 
                class="form-control" 
                id="addresstwo" 
                name="addresstwo"
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
              $123123
            </div>
            <div class="product-title">
              Total
            </div>
          </div>
          <div class="col-8 col-md-3 mt-4">
            <a href="/success.html" class="btn btn-success px-4 btn-block">Checkout Now</a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
