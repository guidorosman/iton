<?php require 'header.php' ?>

	<div class="container">
		<section class="post">
			<article>
				<h2 class="title"><?php echo $article['title'] ?></h2>
				<p class="date"><p class="date"><?php echo formatDate($article['date']); ?></p></p>
				<div class="image">
					<img src="./imagenes/<?php echo $article['image']; ?>" alt="<?php echo $article['title'] ?>">
				</div>
				<p class="extract"><?php echo nl2br($article['text']); ?></p>
			</article>
		</section>
	</div>

<?php require 'footer.php'; ?>