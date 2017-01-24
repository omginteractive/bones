<?php get_header(); ?>

			<section id="content" class="row">

				<div id="inner-content" class="wrap cf row">

                    <div class="col-md-8">

                        <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                                                                        <?php printf( 'Posted'.' %1$s %2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.'by'.'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( '<span>No</span> Comments', '<span>One</span> Comment', '<span>%</span> Comments' );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . 'filed under' . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . 'Tags:' . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>

									<?php bare_bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php echo 'Oops, Post Not Found!'; ?></h1>
										</header>
											<section class="entry-content">
												<p><?php echo 'Uh Oh. Something is missing. Try double checking things.'; ?></p>
										</section>
										<footer class="article-footer">
												<p><?php echo 'This is the error message in the index.php template.'; ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>

				</div>

			</section>


<?php get_footer(); ?>
