<?/**
 * Template Name: page Template
 *
 * @package swickDevMedia
 * @subpackage swickDevMedia
 * @since 2017
 */
get_header();

?>

                    	
                    	<div class="container contactconatain margintop">
                          
 <?php while ( have_posts() ) : the_post(); ?>
                          <p> <?php  the_content(); ?></p>
                        <?php endwhile; ?>


                        </div>
                       



<?php 
get_footer();