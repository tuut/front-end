<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
	<div class="page-wrapper">
		<?php
		do_action('get_header');
		get_template_part('templates/header');
		?>
		<div class="page-content" role="document">
			<main class="main" role="main">
				<?php include App\template_path(); ?>
			</main>
		</div>
		<?php
		do_action('get_footer');
		get_template_part('templates/footer');
		?>
	</div>
	<section class="newsletter-modal" data-remodal-id="newsletter-modal">
		<button data-remodal-action="close" class="remodal-close"></button>

		<h1 class="h-bold">Receba e-mails com novidades</h1>

		<hr>

		<h2>Para se cadastrar, preencha os campos abaixo:</h2>

		<div class="newsletter-form">
			<?php echo do_shortcode('[contact-form-7 id="67"]'); ?>
		</div>
	</section>
	<?php wp_footer(); ?>
</body>
</html>