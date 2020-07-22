<?php
/*
Template Name: Post List Index
*/
?>
<body>

<?php /* get_header(); */ ?>

<title>website - descr</title>


<center><img width="300" src="/wp-content/themes/theme/images/logo.jpg" />
<div class="descr">stuff</div>
<p><a href="/">Home</a></p>
<h1>List of all posts</h2>

<?php get_search_form(); ?>
<?php
echo "<form method='post' action='/?page_id=20794'>";
echo "<div><input style='margin-right: 4px;' type='text' name='fname' placeholder='File name'>";
echo "<input type='submit' value='Search'>";
echo "</div>";
echo "</form>";
?>

<div class="lists">
<div class="categoryl">
<p class="recent">Recently updated</p>

<?php
    $args = array( 'category' => -1, 'post_type' => 'post', 'orderby' => 'modified', 'order' => 'DESC', 'numberposts' => '-1' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :
    setup_postdata($post); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>

</center>
</body>
