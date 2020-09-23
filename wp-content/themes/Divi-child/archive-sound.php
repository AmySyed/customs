<?php
get_header();
?>

<section class="main-title et_pb_section"> 
    <div class="container">
        <h1>
            <?php echo strtoupper ($post_type); ?>
        </h1>
    </div>
</section>  
<section class="post-content et_pb_section"> 
    <div class="container">
        <div class="post-row">
            <?php 
            if ( have_posts() ) :
                while( have_posts() ) : the_post();
                    $post_format = et_pb_post_format(); ?>
                    <article id="post-<?php the_ID(); ?>">
                        <div class="img-wrap">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="content-wrap">
                            <h2> 
                                <?php the_title(); ?>
                            </h2>
                        </div>
                        <div class="detail">
                            <p class="content">
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </article>
                <?php endwhile; 
            endif;
            ?>
        </div>
    </div>
</section>       

<?php
get_footer();
?>