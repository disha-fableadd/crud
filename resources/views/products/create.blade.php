<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create a product</h1>

    <div>

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            
            @endforeach
        </ul>
        
        @endif
    </div>

    <form action="{{route('product.store')}}" method="post">
        @csrf
        <!-- @method('post'); -->
        <div>
            <label for="">Name:</label>
            <input type="text" name="name" placeholder="product name..">
        </div>
        <div>
            <label for="">Qty:</label>
            <input type="text" name="qty" placeholder="product qty..">
        </div>
        <div>
            <label for="">Price:</label>
            <input type="text" name="price" placeholder="product price..">
        </div>
        <div>
            <label for="">Description:</label>
            <input type="text" name="description" placeholder="product description..">
        </div>
        <div>
            <input type="submit" value="Save A New Product">
        </div>
    </form>
</body>
</html>