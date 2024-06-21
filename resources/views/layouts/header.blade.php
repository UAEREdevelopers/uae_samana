<!-- 
    ======================================== 
        Start Header Section
    ========================================
    -->
    <header id="header" class="header-layout-three header-layout-five unveiled-navigation">
        


        <div id="header-bottom">
            <div class="container">
                <!-- <a href="javascript:void(0)" class="showhide" style="display: inline;"><em></em><em></em><em></em></a>
                    <a href="javascript:void(0)" class="menuzord-brand">Creek Harbour</a> -->
                <div id="menuzord" class="menuzord menuzord-responsive orange">
                    <a href="javascript:void(0)" class="showhide" style="display: inline;"><em></em><em></em><em></em></a>
                    <a href="/" class="menuzord-brand"><img src="{{ asset('website') }}/images/logo.webp" alt="d1-logo" data-rjs="3"></a>
                     <!-- <a href="index.html" class="menuzord-brand">
                        <img src="logo.jpg" alt="d1-logo" data-rjs="3">
                    </a> -->
                    <ul class="menuzord-menu menuzord-right menuzord-indented scrollable" style="max-height: 400px; display: none;">
                        <li class=""><a href="/" style="color: #fff;font-size:20px">Home</a></li>
                        <li class=""><a href="#about" style="color: #fff;font-size:20px">About</a></li>
                        @if(isset($allProperties))
                        <li class=""><a href="#properties" style="color: #fff;font-size:20px">Properties</a></li>
                        @endif

                        @if(!isset($allProperties))
                        <li class=""><a href="#features" style="color: #fff;font-size:20px">Features</a></li>
                        <li class=""><a href="#gallerypoint" style="color: #fff;font-size:20px">Gallery</a></li>
                        @endif
                        <li class=""><a href="#contact-us" style="color: #fff;font-size:20px">Contact Us</a></li>
                        <li class="active">
                            <a class="useraction" data-type="call" href="tel:+971588769834" style="color: #fff;font-size:20px">
                                <i class="fas fa-phone-alt mr-1" style="color: #fff;"></i> Call
                            </a>
                        </li>
                        <li class="scrollable-fix"></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <!-- 
    ======================================== 
        Start Header Section
    ========================================
    -->