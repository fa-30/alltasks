<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.edit',$product->id)}}" method="post"  enctype="multipart/form-data" >
        @method('PUT')
        @csrf
     <input type="text" name="product_name" value="{{$product->name}}">
     <input type="text" name="product_price" value="{{$product->price}}">
     <input type="text" name="product_availability" value="{{$product->availability}}">
     <input type="number" name="category_id" value="{{$product->category_id}}">
     <input type="file" name="photo" >

     <input type="submit" >


    </form>
</body>
</html>