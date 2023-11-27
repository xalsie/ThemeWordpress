<?php

	if(!isset($base)){
		$base = str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999)));
	}

	$query = new WP_Query([
		'posts_per_page' => 6,
		'post_type' => 'post',
		'paged' => get_query_var('paged') ?? 1
	]);
?>

<ul class="post-list margin--section">
	<?php
	if($query->have_posts()){

		while($query->have_posts()){
			$query->the_post();
			$post = get_post();
		?>
			<li>
				<a href="<?= get_permalink($post->ID) ?>">
					<h3><?= $post->post_title ?></h3>
					<?= $post->post_ ?>
					<?php if ($categories = get_the_category($post->ID)): ?>
						<span class="post-category"><?= $categories[0]->name ?>,</span>
					<?php endif; ?>
					<time><?= wp_date('F j, Y', strtotime($post->post_date))  ?></time>
					<p><?= $post->post_content ?></p>
				</a>
			</li>
		<?php } ?>
	<?php } ?>
</ul>
