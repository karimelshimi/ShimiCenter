<?php
$_wp_query = $GLOBALS["thim_expired_events"];
?>
<div role="tabpanel" class="tab-pane fade" id="tab-expired">

	<?php while ( $_wp_query->have_posts() ) : $_wp_query->the_post(); ?>

		<?php get_template_part( 'tp-event/content', 'event' ); ?>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div>