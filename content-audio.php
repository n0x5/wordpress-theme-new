<div class="content">
		<div class="metainfo">
		<div class="metatitle1">
		<?php the_time('F jS, Y') ?><br />
                <?php the_category(', '); ?><br />
<span class="post-format">
				<a class="format-audio" href="<?php echo esc_url( get_post_format_link( 'audio' ) ); ?>"><?php echo get_post_format_string( 'audio' ); ?></a>
			</span>
                </div><br />
		</div>
		<div class="entry">
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-entry"><?php the_content(); ?></div>
		</div>
</div>

