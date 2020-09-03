<?php
/*
Template Name: Post List 2
*/
?>


<link rel='stylesheet' id='spooky-fonts-css'  href='https://fonts.googleapis.com/css?family=IM%20Fell%20English&#038;subset=latin' type='text/css' media='all' />

<style type="text/css">
body {
background-color: white;
color: black;
font-family: 'IM Fell English', serif !important;
}
a {
    text-decoration: none;
    font-size: 20px;
    color: black;

</style>

<body>

<?php /* get_header(); */ ?>

<title>Found </title>


<center><img width="300" src="/wp-content/themes/theme/images/logo.jpg" />
<div class="descr">Galleries.</div>
<p><a href="/">Home</a></p>
<h1>List of all posts</h2>

<?php get_search_form(); ?>


<?php

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'posts_per_page' => 25,
    'paged'          => $paged,
);
$the_query = new WP_Query( $args );

global $wp_query;
$tmp_query = $wp_query;
$wp_query = null;
$wp_query = $the_query;

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'medium', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>

<?php endwhile; ?>


<div class="navigation">
  <div class="alignleft"><?php previous_posts_link( 'Newer posts &laquo;' ) ?></div>
  <div class="alignright"><?php next_posts_link( '&raquo; Older posts', $the_query->max_num_pages ) ?></div>
</div>

<?php
    wp_reset_postdata();

else :
    // no posts
endif;

$wp_query = null;
$wp_query = $tmp_query;

?>
