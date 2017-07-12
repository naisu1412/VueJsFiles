<!doctype html>

<html lang="en">
<head>
    @include('ECommerceWebsite.partials._head')
</head>

    @include('ECommerceWebsite.partials._slider')
  
    @include('ECommerceWebsite.partials._styles')

<body class="bodyNew">

    @include('ECommerceWebsite.partials._nav')
   
    @yield('content')

   

</body>

    @include('ECommerceWebsite.partials._footer')
    @include('ECommerceWebsite.partials._scripts')

    
</html>