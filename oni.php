<?php
/*
Template Name: ONI
*/
?>
<div class="row oni">
	<div class="col-md-5 col-md-offset-2">
		<div class="card card-plain">
            <div class="card-body">
                <div class="col-md-3 oni-up">
                    <img src="<?php echo get_template_directory_uri() . '/images/oni-ok.png'?>" class="oni-ok">
                </div>

                <a href="#productos">
				    <h3 class="card-title">ONI</h3>
			    </a>
			    <p class="card-description" style="">Monitors environment temperature and relative humidity with variations of location, luminosity and atmospheric pressure.</p>
                <div class="iconos">
    				<figure>
                        <img src="<?php echo get_template_directory_uri() . '/images/icn_humidity.png'?>" class="humidity">
                        <p>Humidity</p>
                    </figure>
				    <figure>
                        <img src="<?php echo get_template_directory_uri() . '/images/icn_temperature.png'?>" class="temperature">
                        <p>Temperature</p>
                    </figure>
				    <figure>
                        <img 
                        src="<?php echo get_template_directory_uri() . '/images/icn_pressure.png'?>"
                        class="barometric" ><p>Barometric Pressure</p>
                    </figure>
                    <figure>
                        <img src="<?php echo get_template_directory_uri() . '/images/icn_uvrays.png'?>" class="uvindex" ><p>UV Index</p>
                    </figure>
                    <figure>
                        <img src="<?php echo get_template_directory_uri() . '/images/icn_luminosity.png'?>" class="luminosity"><p>
                        Luminosity</p>
                    </figure>
				    <figure>
                        <img src="<?php echo get_template_directory_uri() . '/images/icn_gps.png'?>" class="gps" style=""><p>GPS</p>
                    </figure>
		        </div>
                <div class="card-footer">
                    <!--
                    <a href="" class="btn btn-link btn-neutral">
                        <i class="fa fa-book" aria-hidden="true"></i> Go to Store
                    </a>
                    -->
                    <a href="<?php echo get_home_url() . "/booking"; ?>" class="btn btn-link btn-neutral" style="border-radius:6px;">
                        Book a demo
                    </a>
                </div>
		    </div>
        </div>
    </div>

    <div class="col-md-3 oni-down">
        <img src="<?php echo get_template_directory_uri() . '/images/VT_oni_tienda1.png'?>">
    </div>
</div>