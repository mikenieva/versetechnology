<?php
/*
Template Name: Golem
*/
?>
<div class="row oni">
	<div class="col-md-5 col-md-offset-2">
		<div class="card card-plain">
            <div class="card-body">
                <div class="col-md-3 oni-up">
                    <img src="<?php echo get_template_directory_uri() . '/images/golem-area.png'?>">
                </div>
                <a href="#productos">
				    <h3 class="card-title">GOLEM</h3>
			    </a>
			    <p class="card-description" style="">Monitors soil quality by measuring levels of humidity, acidity and alkalinity, to detect the deviation of parameters outside ideal conditions.</p>
                <div class="iconos">
    				<figure>
                        <img src="<?php echo get_template_directory_uri() . '/images/icn_humidity.png'?>" class="humidity">
                        <p>Humidity</p>
                    </figure>
				    <figure>
                        <img src="<?php echo get_template_directory_uri() . '/images/icn_moisture.png'?>" class="moisture">
                        <p>Soil Moisture</p>
                    </figure>
				    <figure>
                        <img 
                        src="<?php echo get_template_directory_uri() . '/images/icn_conductivity.png'?>"
                        class="conductivity" ><p>Conductivity</p>
                    </figure>
                    <figure>
                        <img src="<?php echo get_template_directory_uri() . '/images/icn_salinity.png'?>" class="salinity" ><p>Salinity</p>
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
        <img src="<?php echo get_template_directory_uri() . '/images/golem-area.png'?>">
    </div>
</div>