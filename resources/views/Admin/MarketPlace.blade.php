
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('Admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.slidebar')
      <!-- partial -->
     @include('Admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container">
                    <div class="heading_container heading_center">
                       <h2>
                          Market <span>Place</span>
                       </h2>
                       <hr>
                       <p>In the product section, you can manage all products with their details</p>
                    </div>
                    <div class="row">
                     @foreach ($product as $products)


                    <div class="col-sm-6 col-md-4 col-lg-3">
                          <div class="box">
                            <div class="card" style="width: 18rem;" >
                                <img class="card-img-top" src="products/{{$products->image}}" alt="Card image cap" height="280px" >
                                <div class="card-body">
                                  <h5 class="card-title">{{$products->name}}</h5>
                                  <h4>Rs. {{$products->price}} /Kg</h4>
                                  <p class="card-text">{{$products->description}}</p>
                                  <a href="{{url('/marketplace/pro_detail', $products->id)}}" class="btn btn-success d-block p-2 fw-bold fs-6">View Detail</a>
                                </div>
                              </div ><br><br>

                          </div>
                       </div>
                       @endforeach

                    </div>

                 </div>

            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('Admin.javascript')
    <!-- End custom js for this page -->
  </body>
</html>
