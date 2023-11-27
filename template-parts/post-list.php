<?php

	if(!isset($paged)){
		$paged = (get_query_var('paged'))? absint(get_query_var('paged')): 1;
	}

	if(!isset($base)){
		$base = str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999)));
	}

	$the_query = new WP_Query([
		'posts_per_page' => 6,
		'post_type' => 'post',
		'paged' => $paged
	]);
?>

<ul class="post-list margin--section">
	<?php
	if($the_query->have_posts()){

		while($the_query->have_posts()){
			$the_query->the_post();
			$p = get_post();
		?>
			<li>
				<a href="<?= get_permalink($p->ID) ?>">
					<h3><?= $p->post_title ?></h3>
					<?= $p->post_ ?>
					<?php if ($categories = get_the_category($p->ID)): ?>
						<span class="post-category"><?= $categories[0]->name ?>,</span>
					<?php endif; ?>
					<time><?= wp_date('F j, Y', strtotime($p->post_date))  ?></time>
					<p><?= $p->post_content ?></p>
				</a>
			</li>
		<?php } ?>
	<?php } ?>
</ul>
