<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Post Name" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
