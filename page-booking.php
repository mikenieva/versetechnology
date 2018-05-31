<?php get_header() ?>

<section>

<form id="myForm" action="/form.php">
<div>
    <div>
        <h1>Book a Demo</h1>
    </div>
    <div>
        <p>Tell us more about you and your project.</p>
        <p>We will contact you to book a demo at your earliest convenience.</p>
    </div>
    <div>
        <h2>Variables to monitor</h2>
        <div>
            <input type="checkbox" name="vehicle" value="Bike">pH<br>
            <input type="checkbox" name="vehicle" value="Bike">Temperature<br>
            <input type="checkbox" name="vehicle" value="Bike">Color<br>
            <input type="checkbox" name="vehicle" value="Bike">Other<br>
        </div>
        <div>
            <input type="checkbox" name="vehicle" value="Bike">ORP<br>
            <input type="checkbox" name="vehicle" value="Bike">Flux<br>
            <input type="checkbox" name="vehicle" value="Bike">Disolved Oxygen<br>
            <input type="checkbox" name="vehicle" value="Bike">Conductivity<br>
        </div>
        <div>
            <input type="checkbox" name="vehicle" value="Bike">Chlorine<br>
        </div>
    </div>
</div>
<div>
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
</div>

</form>

</section>



<?php get_footer() ?>