
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
                <div class="heading_container heading_center">
                    <h2>
                       Market <span>Place</span>
                    </h2>
                    <hr>
                    <p>In the product section, you can manage all products with their details</p>
                 </div>
                 <div class="container">
                    <div class="upper-part">
                      <div class="image">
                        <img src="products/{{$products->image}}" alt="Product Image" style="max-width: 100%; height: auto;">
                      </div>
                      <div class="product-details">
                        <h2>{{$products->name}}</h2>
                        <p>{{$products->description}}</p>
                        <p>Category: Fresh</p>
                         <p>Quantity: 29405 Quintal</p>
                        <p><strong>Price:</strong> Rs. {{$products->price}} /Kg</p>
                        <a href="{{url('/form_request')}}" class="btn btn-primary">Request</a>
                      </div>
                    </div><br>
                    <div class="description">
                      <h3>Product Details</h3>
                      <div class="container-fluid">
                        <div class="row">
                            <div class="col-3">
                                <h4>Min order Qunatity</h4>
                                <p>1 Piece(900g - 950g)</p>
                            </div>
                            <div class="col-2">
                                <h4>Grade</h4>
                                <p>Grade 1</p>
                            </div>
                            <div class="col-2">
                                <h4>Variety</h4>
                                <p>{{$products->name}}</p>
                            </div>
                            <div class="col-2">
                                <h4>Shell Life</h4>
                                <p>5 Days</p>
                            </div>
                            <div class="col-2">
                                <h4>Location</h4>
                                <p>Kota, Rajesthan</p>
                            </div>
                            <h3>Description</h3>
                            <p>Firm but soft textured, the Tomato is mild and crisis when cooked. It goes well with
                                  bright,vibrant ingredients such as lemons and capers. This flower-shaped vegetable is widely
                                   used in North Indian dishes, such as 'Tamatar ki Chutney' due to its versatility.</p>
                        </div>
                      </div>
                    </div>
                  </div>


        <div class="row">
            <H2>Best Seller</H2><hr>
            @foreach ($data as $data)


           <div class="col-sm-6 col-md-4 col-lg-3">
                 <div class="box">
                   <div class="card" style="width: 18rem;" >
                       <img class="card-img-top" src="products/{{$data->image}}" alt="Card image cap" height="280px" >
                       <div class="card-body">
                         <h5 class="card-title">{{$data->name}}</h5>
                         <h4>Rs. {{$data->price}} /Kg</h4>
                         <p class="card-text">{{$data->description}}</p>
                         <a href="{{url('/marketplace/pro_detail', $data->id)}}" class="btn btn-success d-block p-2 fw-bold fs-6">View Detail</a>
                       </div>
                     </div ><br><br>

                 </div>
              </div>
              @endforeach

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

