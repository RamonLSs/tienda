<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<style type="text/css">
    #titulo{
        font-size: 60px;
        font-weight: bolder;
    }

</style>

</head>
<body style="background: url(https://i.postimg.cc/ZnHTP71s/aircraft-airplane-boat-1575833.jpg)" class="page-holder bg-cover">
    <h3 class="text-center mt-3 text-warning display-3" id="titulo">@yield('cabecera')</h3>
    <div class="container mt-3">

        @yield('contenido')
    </div>
</body>
</html>
