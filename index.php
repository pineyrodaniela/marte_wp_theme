<?php get_header(); ?>

<div id="container">
<div id="content" class="clearfix">

<?php include(TEMPLATEPATH."/sidebar.php");?>


	<div id="contentmiddle">
		<?php if (have_posts() && !is_404() ) : while (have_posts()) : the_post(); ?>
		<?php if (!is_page()) : ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="title">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<div id="postyapa"> <div class="postinfo"> By <?php if (get_the_author_url()) { ?><a href="<?php the_author_url(); ?>"><?php the_author(); ?></a><?php } else { the_author(); } ?> · <?php the_time('F jS, Y') ?> · <?php if (!is_single() || $comments) : ?> <?php comments_popup_link('Comment this article', '1 Comment', '% Comments'); ?> <?php endif; ?>
                         </div>
                         </div>
	
			</div>
			<div class="content">
				<?php the_content(); ?>
<br>
<br>

			</div>
		</div>
		<div style="font-size: 0.1px;">&nbsp;</div>

		<?php else: ?>
		<div class="post">
			<h1><?php the_title(); ?></h1>
			<div class="content">
				<?php the_content(__('Read more'));?>
			</div>
		</div>

		<?php endif; ?>

		<!--
		<?php trackback_rdf(); ?>
		-->

		<?php endwhile; else: ?>

		<?php if (is_404() ) : ?>
			<h1>Not Found, Error 404</h1><br />
			<p>The page you are looking for no longer exists.</p>
		<?php else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?><br />
		<?php endif; ?>

<?php if (is_single()) : ?>
		<?php comments_template(); // Get wp-comments.php template ?>
<?php endif; ?>

	</div>
	<div style="clear:both;"></div>
</div>

</div>
<?php get_footer(); ?>