<?php 

    if(!empty($property->carousel_image) && !empty($property->carousel_image_mobile)){ 
    $pathMobile = 'images/carousel_image_mobiles/'.$property->carousel_image_mobile;
    $path = 'images/carousel_images/'.$property->carousel_image;  

?>
    <section id="hero" class="hero-layout-five">
        <div class="hero-image">
                <img src="{{ asset($pathMobile) }}" class="hide-desktop " alt="{{$property->title}}" style="width:100%;">
                <img src="{{ asset($path) }}" alt="{{$property->title}}" class="mobile-hide" style="width:auto;">
        </div>
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 align-self-center sys" style="display: none;">
                        <div class="hero-left banner-text-overlay">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hero-form text-center ">
                            <h3>Register Now</h3>
                            <form action="sendemail.php" method="POST">
                                <input type="text" placeholder="Name *" name="name" required>
                                <input type="text" placeholder="050 123 4567 *" id="phone" name="phone" required>
                                <textarea name="message" placeholder="Enter Your Message*"></textarea>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>