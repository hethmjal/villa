<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Document</title>
    <style>
        body {   font-family: DejaVu Sans, sans-serif;
 }
        
      </style>
</head>
<body >
    <?php
        
        $Arabic = new \ArPHP\I18N\Arabic();
        $name = $Arabic->utf8Glyphs($sub->name);
        $label_name = $Arabic->utf8Glyphs("الاسم");

        $type = $Arabic->utf8Glyphs($sub->payment_type);
        $label_type = $Arabic->utf8Glyphs("طريقة الدفع");

        $label_phone = $Arabic->utf8Glyphs("رقم الهاتف");

        $date = $Arabic->utf8Glyphs($sub->date);
        $label_date = $Arabic->utf8Glyphs("التاريخ");


        ?>

    <h2>{{$label_name}}: {{$name}} </h2>
    <p>{{$label_phone}}: {{$sub->phone}} </p>
    <p>{{ $label_type}}:  {{$type}}</p>
    <p>{{$label_date}}:  {{$sub->created_at->format("Y/M/D")}}</p>
</body>
</html>