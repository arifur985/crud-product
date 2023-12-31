<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
    <h1>Edit your product</h1>
    <div class="container">
        {{--<a href="{{url('/')}}" class="btn btn-primary my-3">Show Data</a>--}}
        <form action="{{url('/update-product/'.$edit_data->id)}}" method="POST">
         @csrf
        <div class="from-group">
         <label for="">Product Name</label>
         <input type="text" class="form-control" name="productName" value="{{$edit_data->productName}}" placeholder="Enter your product name">
         @error('productName')
         <span class="text-danger">{{ $message }}</span>
         @enderror
        </div>
        <div class="from-group">
         <label for="">Product Price</label>
         <input type="number" class="form-control" name="productPrice" value="{{$edit_data->productPrice}}" placeholder="Enter your product price">
         @error('productPrice')
         <span class="text-danger">{{ $message }}</span>
         @enderror
        </div>
       <input type="submit" class="btn btn-primary my-3" value="Submit">
        </form>
        </div>
    
  </body>
</html>