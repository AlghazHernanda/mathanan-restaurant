<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- buat cart --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.ico') }}">
    
{{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @livewireScripts
</head>

<body class="body-fixed">

    {{-- manggil navbar di folder partials.navbar --}}
    @include('partials.navbar')


      <!-- Page Content -->
      <main>
        {{ $slot }}
     </main>



  <!-- jquery  -->
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <!-- bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/popper.min.js"></script>

  <!-- fontawesome  -->
  <script src="assets/js/font-awesome.min.js"></script>

  <!-- swiper slider  -->
  <script src="assets/js/swiper-bundle.min.js"></script>

  <!-- mixitup -- filter  -->
  <script src="assets/js/jquery.mixitup.min.js"></script>

  <!-- fancy box  -->
  <script src="assets/js/jquery.fancybox.min.js"></script>

  <!-- parallax  -->
  <script src="assets/js/parallax.min.js"></script>

  <!-- gsap  -->
  <script src="assets/js/gsap.min.js"></script>

  <!-- scroll trigger  -->
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <!-- scroll to plugin  -->
  <script src="assets/js/ScrollToPlugin.min.js"></script>
  <!-- rellax  -->
  <!-- <script src="assets/js/rellax.min.js"></script> -->
  <!-- <script src="assets/js/rellax-custom.js"></script> -->
  <!-- smooth scroll  -->
  <script src="assets/js/smooth-scroll.js"></script>

  {{-- buat cart --}}
  <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>

  <!-- custom js  -->
  <script src="{{ asset('js/main.js') }}"></script>

  @livewireScripts

</body>

</html>