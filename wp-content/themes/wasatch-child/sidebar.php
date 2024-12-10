<aside id="mainSidebar">
	<?php
	$post_id = 27627;
	$content = get_post_field('post_content', $post_id);
	echo do_shortcode($content);
	?>
</aside>