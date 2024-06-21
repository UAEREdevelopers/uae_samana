<section id="sale-layout-two " class="sale-layout-one pa-30 pt-4">
        <div class="container">
            <div class="section-heading text-center mb-60" id="properties">
                <h1 style="font-size: 2.5rem;">Find your ideal property</h1>
                <!-- <h2 style="font-size: 1.5rem;">Presenting the June - Twin Villas Projects with Side Gardens at Arabian Ranches III </h2> -->
                <p class="mb-0" style="font-size: 18px;">The residents of SAMANA Barari Views will have access to world-class amenities, such as a lazy river, trampoline park, health and wellness club, table tennis, BBQ area, a lodge, men’s and women’s steam rooms and saunas, virtual golf, a relaxation zone and much more. Children will also have their own elite amenities, including a separate children’s pool and rides with safety features. Sports enthusiasts will appreciate the variety of physical activities available in the community from the modern gym to the treadmills, basketball court and more.</p>
            </div>
            <div class="row mb-30">
                <?php
                    foreach ($allProperties as $property) {
                        $path = 'images/thumbnail_images/'.$property->thumbnail_image;  
                        $altpropertyImage = $property->title." Properties ";
                ?>
                    <div class="col-md-4" style="padding-bottom: 20px;">
                        <div class="sale-item">
                            <div class="img">
                                <div class="img-carousel">
                                    <div class="img-slide">
                                        <img src="{{ $path }}" alt="{{$altpropertyImage}}" class="img-fluid">
                                    </div>
                                </div>
                                <div class="hover">
                                    <div class="img-footer">
                                        <h4><span></span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="text-center">{{ $property->title }}</h4>
                                <div class="d-flex justify-content-between">
                                    <!-- <p style="color:black;font-weight: 900;"> <a href="#" data-toggle="modal" data-target="#test" style="color:#f30f0f;">Coming Soon!</a></p> -->
                                    <p style="color:black"> <i class="flaticon-bed"></i> {{ $property->no_of_beds }}</p>
                                    <p style="color:black"> <i class="flaticon-tag"></i><b><a href="#" data-toggle="modal"  style="color:#000;">{{$property->price}}</a></b></p><br>
                                   
                                </div>
                                 {{$property->short_description}}
                                
                                @if(intval($property->is_show) == 1)
                                <div class="footer-content">
                                    <div class="author">
                                        <a href="{{$property->slug}}" class="button button-transparent button-flat" >Read More....</a>
                                        
                                    </div>
                                </div>
                                @else
                                <div class="footer-content">
                                    <div class="author">
                                        <button class="button button-transparent button-flat" onclick="brochureEnquiry('{{$property->title}}','{{$property->slug}}')"><i class="flaticon-down-arrow"></i>Brochure</button>
                                        
                                    </div>
                                </div>

                                @endif
                            </div>
                        </div>
                    </div>
                <?php
                    }
    
                ?>


                </div>
            </div>
        </div>
    </section>