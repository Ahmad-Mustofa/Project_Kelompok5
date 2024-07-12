<!DOCTYPE html>
<html lang="en">

@include('landingPage.partials._head')

<body>

  <!-- ======= Header ======= -->
  @include('landingPage.partials._header')

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('landingPage.partials._footer')

  <!-- Vendor JS Files -->
  @include('landingPage.partials._script')

</body>

</html>