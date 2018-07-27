<?php get_header() ?>


<div style="
    height: 150px;
    background-image: url(&quot;http://localhost:8888/wordpress-vt/wp-content/themes/vt/images/finances.jpg&quot;);
    background-size: cover;
    color: white;
    " http:="" localhost:8888="" wordpress-vt="" wp-content="" themes="" vt="" images="" finances.jpg");="" font-size:="" 33px;"="">
    <h1 style="color:white;padding-top: 65px;margin-left: 17.5%;font-size: 35px;">Join us as an investor</h1>

</div>

<div style="
    background-color: rgb(241, 245, 255);
    padding-bottom: 135px;
    padding-top: 14px;
">
<div style="
    display: inline-block;
    margin-left: 17.5%;
    width: 35%;
    padding-top: 25px;
">
    <div>
        <h2 style="
    color: #2b66ff;
    font-size: 28px;
">Diversify your income</h2>
        <ul style="
    margin-top: 40px;
    padding-left: 0;
">
            <li style="
    list-style: none;
">1. Leave us your information.</li>
            <li style="
    list-style: none;
">2. Consult with us your doubts.</li>
            <li style="
    list-style: none;
">3. Evaluate your options.</li>
            <li style="
    list-style: none;
">4. Join our investment fund and receive up to 16% annual return.</li>
        </ul>
    </div>

    <div style="
    background-color: white;
    margin-top: 33px;
    margin-bottom: 33px;
">
        <div>
            <p style="margin-left: 17px;padding-top: 32px;"><i>"Microsoft will invest $ 5 billion in Internet of Things (IoT) over the next four years to better connect each customer."</i></p>
        </div>
        <div>
            <figure style="
    display: inline-block;
">
                <img src="" alt="">
            </figure>
            <p style="
    display: inline-block;
    margin-left: 3%;
    margin-top: 30px;
    margin-bottom: 30px;
"><b>Forbes México</b> - <a href="#">Article</a></p>
        </div>
    </div>
</div>

<div style="
    display: inline-block;
    margin-left: 8%;
    border: solid 1px #ece4e4;
    vertical-align: top;
    margin-top: 60px;
    background-color: rgb(250, 251, 255);
    padding-right: 25px;
">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
</div>





 
<?php get_footer() ?>