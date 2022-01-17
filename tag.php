<?php
/**
 * The tag template file
 *
 * lists all posts tagged with requested tag
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<?= get_header() ?>

<main>
	<h2 class="text-center">
		<?= _e('Posts tagged with', 'thunderblog') ?>
		<?= '&laquo;' ?><?= single_tag_title() ?><?= '&raquo;' ?>
	</h2>
	<section class="articles">
		<?= get_template_part('parts/post-list') ?>
	</section>
</main>

<?= get_footer() ?>
