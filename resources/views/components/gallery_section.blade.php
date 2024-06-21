

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

                            $gallery_photos = ['1.webp',
                                               '2.webp',
                                               '3.webp',
                                               '4.webp',
                                               '5.webp',
                                               '6.webp',
                                               '7.webp',
                                               '8.webp',
                                               '9.webp',
                                               '10.webp',
                                               '11.webp',
                                               '12.webp'];
                            $gallery_photos_tags = ['mix interior',
                                                    'mix interior',
                                                    'mix exterior',
                                                    'mix exterior',
                                                    'mix exterior amenities',
                                                    'mix exterior amenities',
                                                    'mix exterior',
                                                    'mix exterior',
                                                    'mix exterior',
                                                    'mix exterior',
                                                    'mix exterior', 
                                                    'mix exterior'];
                        ?>

                        <?php foreach ($gallery_photos as $key=>$value) { ?>
                            <div class="col-md-3 hover-active <?php echo $gallery_photos_tags[$key]; ?>">
                                <div class="portfolio-item">
                                    <div class="img">
                                        <a data-fancybox="gallery" data-caption="1" href="{{ asset('website') }}/images/gallery/<?php echo $gallery_photos[$key]; ?>"> <img src="{{ asset('website') }}/images/gallery/thumbnails/<?php echo $gallery_photos[$key]; ?>" alt="" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
