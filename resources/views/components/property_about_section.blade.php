

<section id="about" class="about-layout-five pa-30">
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="about-left">
                        <?php 
                            if(!empty($property->preview_image)){ 
                                $preview_path = "images/preview_images/".$property->preview_image;
                        ?>
                        <img src="{{ asset($preview_path) }}" alt="$property->title" class="img-fluid">
                        <?php 
                            } 
                        ?>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="section-head-two">
                        <p class="primary-color">Why SAMANA </p>
                        <h2 class="mb-0 text-uppercase">{{$property->title}}</h2>
                    </div>
                    <div class="d-flex justify-content-between">
                        <!-- <p style="color:black;font-weight: 900;"> <a href="#" data-toggle="modal" data-target="#test" style="color:#f30f0f;">Coming Soon!</a></p> -->
                        
                        <p style="color:black;font-size: 18px;"> <i class="flaticon-bed" style="color:black;font-size: 18px;"></i><b> {{$property->no_of_beds}} </b></p>
                        
                        
                        <p style="color:black;font-size: 18px;"> <i class="flaticon-tag" style="color:black;font-size: 18px;"></i><b><a href="#" data-toggle="modal" style="color:#000;">{{$property->price}}</a></b></p><br>
                        
                       
                    </div>
                    
                    {!! $property->description !!}

                    <button class="button button-transparent button-flat" onclick="brochureEnquiry('{{$property->title}}')"><i class="flaticon-down-arrow"></i>Brochure</button>

                    <button class="button button-transparent button-flat" onclick="floorPlanEnquiry('{{$property->title}}')"><i class="flaticon-down-arrow"></i>Floor Plan</button>
                </div>
            </div>
        </div>
    </section>