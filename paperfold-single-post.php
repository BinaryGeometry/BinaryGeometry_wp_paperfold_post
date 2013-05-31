<?php $folding_post_query = new WP_Query('showposts=1'); ?>
<?php while ($folding_post_query->have_posts()) : $folding_post_query->the_post(); ?>
<div class="pf"><article class="paperfold-post">
    <div class="pf__item pf__item_collapsed">
        <div class="pf__short">
            <div class="pf__reducer">
                <?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'ryu' ), the_title_attribute( 'echo=0' ) ) ) . '" rel="bookmark">', '</a></h1>' );?>
                <!-- Short content -->
                <?php the_content(); ?>
            </div>
        </div>
    </div></article>
</div>

<?php endwhile; ?>


