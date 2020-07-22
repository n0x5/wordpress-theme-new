<?php get_header(); ?>

  <div class="content">
<div id="main">
<h2>404! The page is not found. Try searching the site below?</h2>

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search content on this site" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
</div> 


         </div>
<?php get_footer(); ?>
</div>


