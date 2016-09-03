<section class="hero">
	<div class="hero__item">
		<div class="hero__image" style="background-image:url(<?php echo get_stylesheet_directory_uri().'/dist/images/banner1.jpg'; ?>)"></div>
		<div class="hero__content">
			<div class="container container--padded">
				<div row>
					<div col offset-md="3" size-md="9">
						<h2 class="hero__title">Dedicação e Superação</h2>
						<p class="hero__excerpt">
							Apresentamos aos nossos clientes soluções que permitam
							<br>
							formatar equipes e estruturas de alta performance.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="hero__details">
			<div class="container container--padded">
				<div row>
					<div col="" size-xs="12">
						<div class="hero__subtitle">
							<span class="h-bold">Red em números</span>
						</div>
						<div class="hero__numbers">
							<div row position-xs="middle">
								<div col size-sm="3" size-xs="6" class="hero__number-wrapper">
									<span class="hero__number">
										10
									</span>
									<p class="hero__number-text">
										Dias para entrega
										<br>
										de lista de candidatos
									</p>
								</div>
								<div col size-sm="3" size-xs="6" class="hero__number-wrapper">
									<span class="hero__number">
										91%
									</span>
									<p class="hero__number-text">
										Dos Clientes da
										<br>
										RED são recorrentes
									</p>
								</div>
								<div col size-sm="3" size-xs="6" class="hero__number-wrapper">
									<span class="hero__number">
										93%
									</span>
									<p class="hero__number-text">
										Recrutamento Ativo.
										<br>
										Vamos além das
										<br>
										redes sociais
									</p>
								</div>
								<div col size-sm="3" size-xs="6" class="hero__number-wrapper">
									<span class="hero__number">
										95%
									</span>
									<p class="hero__number-text">
										De assertividade em
										<br>
										nossas contratações
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="home-news">
	<div class="">
		<div row no-gutter>
			<div col size-sm="6" no-gutter class="h-bg-w">
				<h2 class="title title--fill title--fill--red">RED EM DESTAQUE</h2>
				<div class="content-container">
					<?php  $lastNews = new WP_Query(['cat' => 4, 'posts_per_page' => 1, 'meta_key' => 'destaque', 'meta_value' => true]); ?>
					<?php while($lastNews->have_posts()): $lastNews->the_post(); ?>
						<article class="article article--mini">
							<div class="article__thumbnail">
								<a href="#">
									<?php the_post_thumbnail('thumb'); ?>
								</a>
							</div>
							<time class="article__time h-bold"><?php echo get_the_date(); ?></time>
							<h3 class="article__title">
								<a href="#">
									<?php the_title(); ?>
								</a>
							</h3>
							<div class="article__excerpt h-bold">
								<?php the_excerpt(); ?>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
			</div>
			<div col size-sm="6" no-gutter class="h-bg-g">
				<h2 class="title title--fill title--fill--salmon">
					NOTÍCIAS
					<a href="#">VER TODAS</a>
				</h2>
				<div class="content-container h-bg-g">
					<?php  $lastNews = new WP_Query(['cat' => 4, 'posts_per_page' => 2]); ?>
					<?php while($lastNews->have_posts()): $lastNews->the_post(); ?>
						<article class="article article--mini">
							<time class="article__time h-bold"><?php echo get_the_date(); ?></time>
							<h3 class="article__title">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
							<div class="article__excerpt h-bold">
								<?php the_excerpt(); ?>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>