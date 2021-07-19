<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/abc" method="post">
    @csrf
    <p>Product Description</p>
    <p><input type="text" name="productDescription" placeholder="Description"></p>
    <p>List Price</p>
    <p><input type="number" name="price" placeholder="Price"></p>
    <p>Discount Percent</p>
    <p><input type="number" name="percent" placeholder="Percent"></p>
    <p><input type="submit" value="Calculate Discount"></p>
    <p> Discount Amount: </p>
    <p>
        {{$discountAmount ?? ""}}
    </p>
    <p>Discount Price</p>
    <p>
        {{$discountPrice ?? ""}}
    </p>
</form>
</body>
</html>
