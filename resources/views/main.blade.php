<!DOCTYPE html>
<html lang="en">
  <head>
  @include('partials._head')
  <style>
  
  </style>
  </head>
  
  <body>
    <!-- main-content -->

    @include('partials._nav')

    <div class="container">
    @include('partials._messages')
   
        @yield('content')
    </div>

    @include('partials._footer')
    @include('partials._scripts')

  </body>
</html>