<?php get_header() ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="container-fluid">
    <div class="row">
			<h1><?php the_title(); ?></h1>
            <p><?php the_field('ubicacion'); ?></p>
            <p><?php the_field('horario'); ?></p>
            <p><?php the_field('salario'); ?></p>
    </div>

    <div class="row">
        
            <p><?php the_field('objetivo_del_puesto'); ?></p>
            <p><?php the_field('conocimientos_o_competencias_deseables'); ?></p>

            <p><?php the_field('habilidades_deseables'); ?></p>
            <p><?php the_field('funciones_principales'); ?></p>
            <p><?php the_field('funciones_adicionales_del_puesto'); ?></p>
            <p><?php the_field('en_tu_cv'); ?></p>

</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer() ?>