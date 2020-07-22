<link rel='stylesheet' id='spooky-fonts-css'  href='https://fonts.googleapis.com/css?family=IM%20Fell%20English&#038;subset=latin' type='text/css' media='all' />
</body>

<style type="text/css">
body {
background-color: black;
color: white;
font-family: 'IM Fell English', serif !important;
}
.post-entry {
}
#main {
/*width: 930px;*/
}
.grid-item {
}
a.titlecat {
font-size: 30px;
color: #e91e63;
}
.titlecat {
display: inline;
}
.titlecat a {
font-size: 30px;
color: #e91e63;
display: inline;
}

a {
font-size: 20px;
color: white;
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
/*padding-left: 410; */
}
h2.post1 {
width: 160px;
float: left;
}
.imgc {
width: 300px;
float: left;
margin: 2px;
}
.dimensions {
position: relative;
width: 100;
bottom: 15px;
background: white;
color: black;
}


</style>

<?php /* get_header(); */ ?>

<title><?php the_title(); ?> >> website</title>

<div class="headtitle">website</div>

<div id="main">
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<div class="entry">
<div class="metatitle1"><?php the_time('F jS, Y') ?></div>

<a class="titlecat" href="https://website.com"><h1>Home</a> > <div class="titlecat"><?php the_category(', '); ?></div> > 
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>

<?php  the_content('more))');  ?>
</div>
</div>

<?php wp_reset_query(); ?>
	<?php endwhile; ?>
	<?php endif; ?>

