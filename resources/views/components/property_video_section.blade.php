
<?php 
if(!empty($property->property_video) ){ 
    $video_path = "images/property_videos/".$property->property_video;
?>

<section>
        <div class="fluid-container">
            <div class="row">
                <div class="col-md-12">
                    <video src="{{asset($video_path) }}" autoplay="true" controls muted loop width="100%" height="auto"></video>
                </div>
            </div>
        </div>
    </section>
    
 <?php 
 } 
 ?>