<link rel='stylesheet' id='spooky-fonts-css'  href='https://fonts.googleapis.com/css?family=IM%20Fell%20English&#038;subset=latin' type='text/css' media='all' />
<body>
<style type="text/css">
body {
background-color: white;
color: black;
font-family: 'IM Fell English', serif !important;
}
.post-entry {
}
.categoryl {
float: left;
margin: 12px;
}
.grid-item {
}
a.titlecat {
font-size: 30px;
color: #e91e63;
}
a {
text-decoration: none;
font-size: 20px;
color: black;
}
.headtitle {
text-align: center;
font-size: 80px;
}
.descr {
text-align: center;
font-size: 20px;
}
.lists {
/*width: 960px;
padding-left: 410;*/
}
h2.post1 {
width: 160px;
float: left;
}

</style>
<title><?php the_archive_title(); ?> >> Found</title>

<div class="headtitle">Found</div>


<div class="lists">
<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older galleries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer galleries &raquo;') ?></div>
</div>	

<?php // the_posts_pagination(); ?>

<div class="titlecat"><a class="titlecat" href="https://found.com"><h1>Home</a> > <?php the_category(', '); ?></div>
	<?php if (have_posts()) : ?>
	   
       
     
	<?php while (have_posts()) : the_post(); ?>
    <div class="categoryl">
			
            <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
	
     </div>
	<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div>

</body>
