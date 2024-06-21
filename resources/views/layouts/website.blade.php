<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="SAMANA Property Developers, Dubai">
    <!-- Favicon -->
    <link rel="icon"  sizes="256x256" href="{{ asset('website') }}/images/favicons/android-icon-36x36.webp">
    
   
    
    <link rel="manifest" href="{{ asset('website') }}/images/favicons/manifest.json">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
    <!-- All Styles -->
    <link rel="stylesheet" href="{{ asset('website') }}/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/lib/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/lib/iconfont/flaticon.css">
    <link rel="stylesheet" href="{{ asset('website') }}/lib/Menuzord/css/menuzord.css">
    <link rel="stylesheet" href="{{ asset('website') }}/lib/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('website') }}/lib/slick/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('website') }}/lib/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="{{ asset('website') }}/lib/animate/animate.css">
    <link rel="stylesheet" href="{{ asset('website') }}/lib/aos/aos.css">
    <script src="https://use.fontawesome.com/0818193563.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.7/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.7/build/js/intlTelInput.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/intlTelInput.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/flaticons/flaticon.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/dev_styles.css">

    @yield('metatags')
    
    


    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">


  </head>
  <body>
  
    <!-- Back to Top Button -->
    <a id="top-button" href="#"><i class="fas fa-chevron-up"></i></a>
    <!-- End of Back to Top -->
    
    @include('layouts.header')

      @yield('content')

    @include('layouts.footer')
    
    
  


  <script src="{{ asset('website') }}/lib/jquery-3.4.1.min.js"></script>
  <script src="{{ asset('website') }}/lib/jquery-ui.min.js"></script>


  <script src="{{ asset('website') }}/lib/bootstrap/js/popper.min.js"></script>
  <script src="{{ asset('website') }}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('website') }}/lib/counterup/waypoints.min.js"></script>
  <script src="{{ asset('website') }}/lib/counterup/jquery.counterup.min.js"></script>
  <script src="{{ asset('website') }}/lib/fancybox/jquery.fancybox.min.js"></script>
  <script src="{{ asset('website') }}/lib/Menuzord/js/menuzord.js"></script>
  <script src="{{ asset('website') }}/lib/isotope/isotope.min.js"></script>
  <script src="{{ asset('website') }}/lib/aos/aos.js"></script>
  <script src="{{ asset('website') }}/lib/retina/retina.min.js"></script>
  <script src="{{ asset('website') }}/lib/slick/slick.min.js"></script>

  <!-- Custom Scripts -->
  <script src="{{ asset('website') }}/js/behome.js"></script>
  <script src="{{ asset('website') }}/js/slider.js"></script>
  <script src="{{ asset('website') }}/js/intlTelInput.js"></script>
  <script src="{{ asset('website') }}/js/utils.js"></script>


  


  @yield('script')

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/666033319a809f19fb393d6c/1hvjsfv3e';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->


  </body>
</html>