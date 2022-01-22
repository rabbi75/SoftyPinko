<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Softy Pinko</title>
      @include('frontend.partials.link')
    </head>

    <body>
    @include('frontend.partials.nav')
      @yield('content')
    @include('frontend.partials.footer')
    @include('frontend.partials.script')
  </body>
</html>
