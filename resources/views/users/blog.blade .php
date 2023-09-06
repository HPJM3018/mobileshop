
@include('layouts/header')

<section class="shop_section layout_padding" id="app">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          IPHONE
        </h2>
      </div>
      <div class="row">
      @foreach($products as $product)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="{{$product->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                {{$product->name}}
               
                </h6>
                <h6>
                  <span>
                  {{$product->price}}
                  </span>
                </h6>
              </div>
              <div class="new">
                <a href=""><span>
                Caractéristiques
                </span>
              </div>
              </a>
            </a>
            <add-to-cart:product-id="{{$product->id}}">
              
            </add-to-cart>
          </div>
        </div>
      @endforeach
      
    </div>
  </section>

  <!-- end shop section -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  @include('layouts/footer')