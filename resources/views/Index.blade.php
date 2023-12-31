<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <h1>Product List</h1>
    <div class="container">
        {{--Show message--}}
        @if (Session::has('status'))
        <h4 class="text-success">{{Session::get('status')}}</h4>   
        @endif

        <a href="{{url('/add-product')}}" class="btn btn-primary my-3">Add Product</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Product Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key=>$data)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->productName}}</td>
                <td>{{$data->productPrice}}</td>
                <td>
                 <a href="{{url('/edit-product/'.$data->id)}}" class="btn btn-success">Edit</a>
                 <a href="{{url('/delete-product/'.$data->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$datas->links()}}
    </div>
 
  </body>
</html>