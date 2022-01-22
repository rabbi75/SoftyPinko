<!DOCTYPE html>
<html lang="en">

<head>
  @include('backend.partials.meta')
  <title>SoftyPinko - Dashboard</title>
  @include('backend.partials.link')
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('backend.partials.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('backend.partials.topbar')
        @yield('content')
      </div>
      @include('backend.partials.footer')
    </div>
  </div>
  @include('backend.partials.scrollbar')
  @include('backend.partials.script')
</body>

</html>