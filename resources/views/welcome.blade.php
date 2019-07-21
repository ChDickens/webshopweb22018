<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<header class="header">

</header>
<footer class="footer">
    <div class="home-slider">
        <div>1</div>
        <div>1</div>
        <div>1</div>
        <div>1</div>
    </div>
</footer>
<link rel="stylesheet" type="text/css" href="{{ asset('/libs/slick/slick.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/libs/slick/slick-theme.css) }}"/>
<script type="text/javascript" src="{{ asset('/libs/slick/slick.min.js) }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.home-slider').slick({
            arrows: true,
            dots: true
        });
    });
</script>
</body>
</html>