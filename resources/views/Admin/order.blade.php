
<!DOCTYPE html>
<html lang="en">
  <head>
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
                @if(session()->has('delete_meassage'))
                <div class="alert alert-danger">
                    <button class="close" type="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('delete_meassage')}}

                </div>
                @endif



                <table class="table">
                    <thead>
                      <tr>
                        <th scope="id">Product id</th>
                        <th>ORDER ID</th>
                        <th>PRODUCT NAME</th>
                        <th>QUANTITY</th>
                        <th>PRICE PER UNIT</th>
                        <th>STATE</th>
                        <th>STATUS</th>
                        <th>ACTION</th>


                      </tr>
                    </thead>
                    <tbody>


                        @foreach ($orders as $order )
                          <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->order_id}}</td>
                        <td>{{$order->product_name}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price_per_unit}}</td>
                        <td>{{$order->state}}</td>
                        <td>{{$order->status}}</td>
                        <td>
                            <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                               <span class="mdi mdi-dots-vertical"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item d-flex align-items-center gap-2 text-white" href="#"><i class="mdi mdi-eye"></i>View</a></li>
                                <li><a class="dropdown-item d-flex align-items-center gap-2 text-white" href="{{url('/Delete_order', $order->id)}}"><i class="mdi mdi-delete"></i>Delete</a></li>
                              </ul>
                            </div>
                          </td>

                      </tr>
                      @endforeach

                    </tbody>

                  </table>

                  <div class="m-3">
                    {{-- {{$orders->links()}} --}}
                    {{$orders->links("pagination::bootstrap-5")}}
                </div>

        </div>



      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.javascript')
    <!-- End custom js for this page -->
  </body>
</html>
