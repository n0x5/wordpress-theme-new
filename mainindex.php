<?php
/*
Template Name: Found Main Index
*/
?>
<html>
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
height: 1045px;
width: 430px;
float: left;
}

.category2 {
height: 100px;
width: 430px;
display: block;
}
a.titlecat2 {
font-size: 13px;
color: #e91e63;
}
a.titlecat3 {
font-size: 13px;
color: black;
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
/*padding-left: 350;*/
}
p.recent {
font-size: 12px;
}


</style>

<?php /* get_header(); */ ?>

<title>Found </title>


<center><img width="300" src="/wp-content/themes/foun/images/logo.jpg" /></center>
<div class="descr">Galleries</div>
<body>

<?php get_search_form(); ?>

<form method='post' action='/?page_id=20794'>
<div><input type='text' name='fname' placeholder='File name'>
<input type='submit' value="Search">
</div>
</form>




<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=2"><h1>I models</a>
<p class="recent">Recent updated </p>
(<?php $category = get_category(2); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 2, 'post_type' =>  'post', 'orderby'     => 'modified', 'order'       => 'DESC' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>

<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=7"><h1>I models teens</a>
<p class="recent">Recent updated</p>
(<?php $category = get_category(7); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 7, 'post_type' =>  'post', 'orderby'     => 'modified', 'order'       => 'DESC' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>


<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=6"><h1>Candydoll</a>
(<?php $category = get_category(6); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 6, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>



<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=12"><h1>Teenmodeling.tv</a>
(<?php $category = get_category(12); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 12, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>

<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=14"><h1>Silver</a>
(<?php $category = get_category(14); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 14, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>


<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=17"><h1>Dream</a>
(<?php $category = get_category(17); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 17, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>


<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=5"><h1>Found</a>
(<?php $category = get_category(5); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 5, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>



<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=28"><h1>Newstar</a>
(<?php $category = get_category(28); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 28, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>

<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=32"><h1>FTM</a>
(<?php $category = get_category(32); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 32, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>


<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=37"><h1>Br</a>
(<?php $category = get_category(37); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 37, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>


<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=43"><h1>Party Models</a>
(<?php $category = get_category(43); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 43, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>



<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=3"><h1>I Archives</a>
(<?php $category = get_category(3); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 3, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>

<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found.com/?cat=46"><h1>School</a>
(<?php $category = get_category(46); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 46, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>


</body>


</html>
