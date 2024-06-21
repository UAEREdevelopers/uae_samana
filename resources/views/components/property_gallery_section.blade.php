

<section id="portfolio" class="portfolio-layout-one pb-100 mt-5">
        <div class="container-fluid">
            <h2 class="text-center pt-2" id="gallerypoint">Gallery</h2>
            
            <div class="row mb-30">
                <div class="col-md-12">
                    <div class="filters-button-group nav justify-content-center mb-60">
                        <button type="button" data-filter=".mix" class="nav-item nav-link is-checked">ALL</button>
                        <button type="button" data-filter=".interior" class="nav-item nav-link">INTERIOR</button>
                        <button type="button" data-filter=".exterior" class="nav-item nav-link">EXTERIOR</button>
                        <button type="button" data-filter=".amenities" class="nav-item nav-link">AMENITIES</button>
                    </div>
                    <div class="portfolio-items row">
                       

                        <?php 
                            foreach ($galleries as $key=>$gallery) { 

                                $gallery_image_path = "images/gallery_images/".$gallery->gallery_image;
                                $gallery_thumbnail_image_path = "images/gallery_thumbnail_images/".$gallery->gallery_thumbnail_image;
                                $tags = "";
                                $tags .= intval($gallery->is_mix) == 1 ? "mix ": "";
                                $tags .= intval($gallery->is_ext) == 1 ? "exterior ": "";
                                $tags .= intval($gallery->is_int) == 1 ? "interior ": "";
                                $tags .= intval($gallery->is_amenity) == 1 ? "amenities ": "";

                        ?>
                            <div class="col-md-3 hover-active {{$tags}}">
                                <div class="portfolio-item">
                                    <div class="img">
                                        <a data-fancybox="gallery" data-caption="1" href="{{ asset($gallery_image_path) }}"> <img src="{{ asset($gallery_thumbnail_image_path) }}" alt="" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
