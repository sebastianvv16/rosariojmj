<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rosariojmj
 */

 <?php get_header(); ?>

         <div class="container clearfix">
           <div class="row">
             <div class="main col-sm-12 col-md-12">
               <section class="error-404 not-found">
                 <header class="page-header">
                   <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'rosariojmj' ); ?></h1>
                 </header><!-- .page-header -->
                 <div class="page-content">
                   <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'rosariojmj' ); ?></p>

                   <?php get_search_form(); ?>

                 </div><!-- .page-content -->
               </section><!-- .error-404 -->
             </div>
            </div>
         </div>

 <?php get_footer(); ?>
