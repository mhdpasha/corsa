<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Corsa App</title>

      {{-- Datatables CSS
      <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.dataTables.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css"> --}}

      <!-- Favicon -->
      <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
      <link rel="icon" href="../assets/images/favicon.ico" type="image/png">
      <link rel="manifest" href="/manifest.json">


      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="../assets/css/core/libs.min.css">

      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="../assets/vendor/aos/dist/aos.css">

      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="../assets/css/hope-ui.min.css?v=4.0.0">

      <!-- Custom Css -->
      <link rel="stylesheet" href="../assets/css/custom.min.css?v=4.0.0">

      <!-- Dark Css -->
      <link rel="stylesheet" href="../assets/css/dark.min.css">

      <!-- Customizer Css -->
      <link rel="stylesheet" href="../assets/css/customizer.min.css">

      <!-- RTL Css -->
      <link rel="stylesheet" href="../assets/css/rtl.min.css">

      @livewireStyles
  </head>
  <body class="light">

    {{-- <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader text-center">
        <img src="img/logo.png" alt="logo" width="600px" height="auto">
      </div>
    </div>
    <!-- loader END --> --}}

    @include('partials.sidebar')

    <main class="main-content">
    @include('partials.topbar')

        @yield('content')
      <!-- Footer Section End -->
    </main>

    <!-- Wrapper End-->



    @include('partials.setting')

    @livewireScripts

    <!-- Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="../assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="../assets/js/charts/vectore-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js" ></script>

    <!-- fslightbox Script -->
    <script src="../assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="../assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="../assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="../assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->
    <script src="../assets/vendor/aos/dist/aos.js"></script>

    <!-- App Script -->
    <script src="../assets/js/hope-ui.js" defer></script>

    

    {{-- Color Scheme --}}
    {{-- <script src="../assets/js/theme.js"></script> --}}

  </body>
</html>
