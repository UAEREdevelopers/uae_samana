@if(count($amenities) > 0)
<section class="community mt-4">
    <div class="container">
        <h2 class="text-center pt-2" id="features">Features</h2>
        <div class="headline" style="border: 0;border-top: 1px solid lightgray;margin: 1em 0px 0px 313px;width: 50%;"></div>
            <div class="row">

                <?php foreach ($amenities as $amenity) { 
                        $amenity_image_path = "images/amenity_images/".$amenity->amenity_image;
                ?>

                    <div class="col-6 col-sm-4 col-md-3 pt-4 text-center">
                        <img src="{{ asset($amenity_image_path) }}" alt="{{$amenity->heading_text}}" >
                        <span class="features">
                            <span class="features-header">{{$amenity->heading_text}}</span>{{$amenity->sub_heading_text}}
                        </span>
                    </div>

                <?php } ?>
            </div>
    </div>
</section>
@endif