
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
                        <th>AMOUNT PAYABLE</th>
                        <th>MODE OF PAYMENT</th>
                        <th>PAYMENT STATUS</th>
                        <th>INVOICE</th>


                      </tr>
                    </thead>
                    <tbody>


                        @foreach ($payment_invoices as $payment_invoice )
                          <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$payment_invoice->order_id}}</td>
                        <td>{{$payment_invoice->product_name}}</td>
                        <td>{{$payment_invoice->amount_payable}}</td>
                        <td>{{$payment_invoice->mode_of_payment}}</td>
                        <td>{{$payment_invoice->payment_status}}</td>
                        <td><a href="{{url('/print_pdf', $payment_invoice->id)}}"><button class="btn btn-primary">invoice</button></a></td>


                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                  <div class="m-3">
                    {{-- {{$orders->links()}} --}}
                    {{$payment_invoices->links("pagination::bootstrap-5")}}
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
