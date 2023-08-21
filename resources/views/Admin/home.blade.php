
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
       @include('Admin.body')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('Admin.javascript')
    <!-- End custom js for this page -->
  </body>
</html>
