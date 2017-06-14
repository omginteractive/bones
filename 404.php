<?php get_header(); ?>
<section id="content" class="row">
    <div id="inner-content" class="col-md-12">
        <main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            <article id="post-not-found" class="hentry">
                <header class="article-header">
                    <h1><?php echo 'Epic 404 - Article Not Found'; ?></h1>
                </header>

                <section class="entry-content">
                    <p><?php echo 'The article you were looking for was not found, but maybe try looking again!'; ?></p>
                </section>

                <section class="search">
                    <p><?php get_search_form(); ?></p>
                </section>

                <footer class="article-footer">
                    <p><?php echo 'This is the 404.php template.'; ?></p>
                </footer>
            </article>
        </main>
    </div>
</section>

<?php get_footer(); ?>
