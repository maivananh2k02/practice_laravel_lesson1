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
<h1>Dictionary</h1>
<form action="/dictionary" method="post">
    @csrf
    <p><input type="text" name="search"></p>
{{--    <p><input type="submit" value="Search"></p>--}}
    <button type="submit" >Search</button>

</form>
<p>To:{{ $to ?? ''}} </p>
</body>
</html>
