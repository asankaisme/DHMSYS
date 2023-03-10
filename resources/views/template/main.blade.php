<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DHMSys</title>
    @extends('template.header')
</head>
<body>
    @extends('template.navbar')
    @extends('template.sidebar')
    <main id="main" class="main">
    @yield('content')
    </main>
    <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>IT Division | District Hospital, Matara</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->
    @extends('template.footer') 
</body>
</html>