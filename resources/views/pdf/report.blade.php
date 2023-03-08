<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Document</title>
</head>
<body>
    <h2>Name: هيثم ابو جلهوم </h2>

    <h2>Name: {{$sub->name}} </h2>
    <p>Phone: {{$sub->phone}} </p>
    <p>payment type:  {{$sub->payment_type}}</p>
    <p>date:  {{$sub->created_at->format("Y/M/D")}}</p>
</body>
</html>