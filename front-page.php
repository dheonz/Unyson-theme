<?php
/**
 * Created by PhpStorm.
 * User: Мария
 * Date: 06.04.2017
 * Time: 12:35
 */

get_header();


?>

<div  id="page-wrapper">

    <div id="content" tabindex="-1">



            <!-- Do the left sidebar check -->
           

            <main class="site-main" id="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->

        </div><!-- #primary -->

        <!-- Do the right sidebar check -->



</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_sidebar(footerfull);
get_footer(); ?>
