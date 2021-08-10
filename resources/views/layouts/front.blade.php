<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    
    @include('front.menu')

    @yield('content')


<script src="{{ asset('assets/js/jquery.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.js')}}"></script>


<script src="{{ asset('assets/ckeditor5/build/ckeditor.js')}}"></script>

<script>

</script>






@yield('js')

<footer class="container-fluid bg-primary">
    <p class="text-center text-white">
        @Copyright {{ date('Y') }}
    </p>
  
</footer>
</body>
</html>