<?php

defined( 'ABSPATH' ) || exit( 'Direct script access denied.' );

get_header();

global $post;
$l = etheme_page_config();
$post_template  = get_query_var('et_post-template', 'default');
$post_format 	= get_post_format();
$post_large = ($post_template == 'large' || $post_template == 'large2') ? true : false;
?>

<?php if ( $post_large ): ?>
	<div class="single-post-large-wrapper <?php if($post_template == 'large2') echo 'centered'; ?>">
		<div class="single-post-large">
			<div class="post-heading">
				<div class="container">
					<?php if($post_format == 'quote'): ?>
						<div class="featured-quote">
							<div class="quote-content">
								<div class="quote-icon">
									<i class="fa fa-quote-left"></i>
								</div>
								<?php etheme_the_post_field( 'quote' ); ?>
							</div>
						</div>
					<?php endif; ?>

					<?php etheme_primary_category(true); ?>

					<?php if ( etheme_get_option( 'single_post_title', 1 ) ): ?>
						<h2><?php the_title(); ?></h2>
						<?php etheme_byline(); ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
<?php else: ?>
	<?php do_action( 'etheme_page_heading' ); ?>
<?php endif ?>

	<div class="container sidebar-mobile-<?php etheme_option('blog_sidebar_for_mobile'); ?>">
	<div class="content-page sidebar-position-<?php echo esc_attr( $l['sidebar'] ); ?>">
		<div class="row hfeed">

			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
			<?php
			$post_content 	= get_the_content();
			$gallery_filter = etheme_gallery_from_content( $post_content );
			$classes 		= array();
			$classes[] 		= 'blog-post';
			$classes[] 		= 'post-single';
			$classes[] 		= 'post-template-' . $post_template;
			?>

			<?php if ( $post_template != 'full-width'): ?>
			<div class="content <?php echo esc_attr( $l['content-class'] ); ?>">
				<article <?php post_class( $classes ); ?> id="post-<?php the_ID(); ?>" >
					<?php endif; ?>

					<header class="post-header">
						<?php if ( etheme_get_option('blog_featured_image', 1) && !etheme_get_custom_field('post_featured')): ?>

							<?php etheme_post_thumb( array(
								'size' => 'full',
								'link' => false
							) ); ?>

							<?php if( etheme_get_option( 'single_post_title', 1 ) && ($post_format == 'audio' || $post_format == 'video') && $post_template == 'large' && $post_template == 'large2' ): ?>
								<div class="wp-picture">
									<?php the_post_thumbnail( 'full' ); ?>
								</div>
							<?php endif; ?>

						<?php endif ?>



						<?php if( etheme_get_option( 'single_post_title', 1 ) && $post_format != 'quote' && $post_template != 'large' && $post_template != 'large2'): ?>
							<div class="post-heading">
								<h2 class="entry-title"><?php the_title(); ?></h2>
								<?php etheme_byline(); ?>
							</div>
						<?php endif; ?>
					</header><!-- /header -->

					<?php if ( $post_template == 'full-width'): ?>
					<div class="content <?php echo esc_attr( $l['content-class'] ); ?>">
						<article <?php post_class( $classes ); ?> id="post-<?php the_ID(); ?>" >
							<?php endif; ?>

							<?php if($post_format != 'gallery'): ?>
								<div class="content-article entry-content">
									<?php the_content(); ?>
								</div>
							<?php elseif($post_format == 'gallery'): ?>
								<?php echo '<div class="content-article entry-content">' . $gallery_filter['filtered_content'] . '</div>'; ?>
							<?php endif; ?>

							<div class="post-navigation"><?php wp_link_pages(); ?></div>

							<?php the_tags( '<div class="single-tags"><span>' . esc_html__( 'Tags: ', 'xstore' ) . '</span>', ', ', '</div>' ); ?>

							<?php if(etheme_get_option('post_share', 1) && class_exists('ETC\App\Controllers\Shortcodes\Share')): ?>
								<div class="share-post">
									<?php echo ETC\App\Controllers\Shortcodes\Share::share_shortcode( array( 'title' => esc_html__('Share Post', 'xstore') ) ) ; ?>
								</div>
							<?php endif; ?>

							<div class="clear"></div>

							<?php if(etheme_get_option('posts_links', 1) && function_exists('etheme_project_links')): ?>
								<?php etheme_project_links(array()); ?>
							<?php endif; ?>

							<?php if(etheme_get_option('about_author', 1)): ?>
								<h3 class="about-author-title"><span><?php esc_html_e('About author', 'xstore'); ?></span></h3>
								<div class="author-info">
									<a class="pull-left" href="#">
										<?php echo get_avatar( get_the_author_meta('email') , 130 ); ?>
									</a>
									<div class="media-body">
										<h4 class="title-alt author-name"><span><?php esc_html_e('About Author', 'xstore'); ?></span></h4>
										<h4 class="media-heading"><?php the_author_link(); ?></h4>
										<p class="author-desc"><?php echo get_the_author_meta('description'); ?></p>
										<a class="author-link url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
											<?php printf( esc_html__( 'Other posts by %s', 'xstore' ), get_the_author() ); ?>
										</a>
									</div>
								</div>
							<?php endif; ?>

							<?php if(etheme_get_option('post_related', 1)): ?>
								<div class="related-posts">
									<?php etheme_get_related_posts(); ?>
								</div>
							<?php endif; ?>

						</article>
						<?php comments_template('', true); ?>

					</div><!-- .content -->

					<?php endwhile; else: ?>

						<h2><?php esc_html_e('No posts were found!', 'xstore') ?></h2>

					<?php endif; ?>

					<?php get_sidebar(); ?>

			</div>

		</div>
	</div>

<?php
get_footer();
?>