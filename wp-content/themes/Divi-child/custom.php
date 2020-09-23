<?php
/* Template Name: Custom */

get_header();
?>

<h1 class="entry-title main_title et_pb_row et_pb_row_0"> <?php the_title(); ?> </h1>

<section class="et_pb_row et_pb_row_0"> <?php the_post_thumbnail(); ?> </section>

<?php

the_content();

get_footer();
?>