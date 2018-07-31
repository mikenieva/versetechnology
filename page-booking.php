<?php get_header() ?>
    <div style="height: 150px;background-image: url(&quot;http://localhost:8888/wordpress-vt/wp-content/themes/vt/images/finances.jpg&quot;);background-size: cover;
    color: white;">
        <h1 style="color:white;padding-top: 65px;margin-left: 17.5%;font-size: 35px;">Book a Demo</h1>
    </div>

    <div style="background-color: rgb(241, 245, 255);padding-bottom: 135px;padding-top: 14px;">
        <div style="display: inline-block;margin-left: 17.5%;width: 35%;padding-top: 25px;">
            <div>
                <h2 style="color: #2b66ff;font-size: 28px;">Tell us more about you and your project.</h2>
                <ul style="margin-top: 40px;padding-left: 0;">
                    <li style="list-style: none;">
                        <p>Tell us more about you and your project.</p>
                        <p>We will contact you to book a demo to your earliest convenience.</p>
                    </li>
                </ul>
            </div>            
        </div>

        <div style="display: inline-block;margin-left: 8%;border: solid 1px #ece4e4;vertical-align: top;margin-top: 60px;background-color: rgb(250, 251, 255);padding-right: 25px;">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer() ?>