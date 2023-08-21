

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        label{
            color: white;
        }
        input{
            color: white;
            border-radius: 20px;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.slidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="close" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>

                @endif
                <div class="container">
                    <div class="container-fluid ">
                        <div class="row justify-content-center">
                            <div class="col-sm-5">
                                <div class="card mt-3 p-3">
                                     <form method="POST" action="{{url('save_product')}}" enctype="multipart/form-data">
                                        @method("post")
                                    @csrf
                                    <div class="form-group ">
                                        <label>Product Name</label>
                                        <input  name="product_name" class="form-control" value="{{old('product_name')}}">
                                        @if ($errors->has('product_name'))
                                        <span class="text-danger">{{$errors->first('product_name')}}</span>
                                        @endif



                                    <div class="form-group ">
                                        <label>Product Quantity</label>
                                        <input  name="quantity" class="form-control" value="{{old('quantity')}}">
                                        @if ($errors->has('quantity'))
                                        <span class="text-danger">{{$errors->first('quantity')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group ">
                                        <label>Product price</label>
                                        <input name="price" class="form-control" value="{{old('price')}}">
                                        @if ($errors->has('price'))
                                        <span class="text-danger">{{$errors->first('price')}}</span>
                                        @endif
                                    </div>


                                    <div class="form-group ">
                                        <label>Description</label>
                                        <textarea name="description"  rows="6" class="form-control" value="
                                                     {{old('description')}}"></textarea>
                                        @if ($errors->has('description'))
                                           <span class="text-danger">{{$errors->first('description')}}</span>
                                         @endif

                                    </div>
                                    <div class="form-group ">
                                        <label>Product image</label>
                                        <input type="file" name="image"  rows="6" class="form-control" value="{{old('image')}}">
                                        @if ($errors->has('image'))
                                        <span class="text-danger">{{$errors->first('image')}}</span>

                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                                </form>
                            </div>

                            </div>
                        </div>
                    </div>
            </div>
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

