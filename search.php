<?php get_header(); ?>
<div id="main">
	<?php if (have_posts()) : ?>
		<h2 class="pagetitle"><?php _e("Search Results"); ?></h2>
	<?php while (have_posts()) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<div id="content">
		
             
		<div class="entry">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php

$firstname = explode(" ",the_title('','',false));
$firstname1 = $firstname[0]._.$firstname[1]._.$post->ID;
$lastname = $firstname[1];
$title = $firstname1;
$zipname1 = "$title.zip";
$time2 = get_post_time('Y/m');
$uploads = wp_upload_dir($time2);
$uploa3 = $uploads['path'];
$uploa3url = $uploads['url'];
$zipname = "$uploa3/$zipname1";
$zipnameurl = "$uploa3url";

if (file_exists($zipname)) {
  echo "<div class=\"zipit\"><a href=\"$zipnameurl/$firstname1.zip\">$firstname1.zip</a></div>";

} else {
echo "<div class=\"zipit\">Zip file not created, click on post to create one!</div>";
}

?>



			<div class="post-entry"> <?php  the_content('>> See gallery');  ?></div>

<div class="gallery">

		
		
               <div class="metatitle1"><?php the_time('F jS, Y g:i a') ?> <?php the_category(', '); ?> </div>
		</div>

	</div>
	</div>
        </div>
	<?php endwhile; ?>
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		
	</div>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
