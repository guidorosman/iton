<?php require 'header.php' ?>

    <div class="container">
		<?php foreach($articles as $article): ?>
			<div class="post">
				<article>
					<h2 class="title"><a href="single.php?id=<?php echo $article['id']; ?>"><?php echo $article['title'] ?></a></h2>
					<p class="date"><?php echo formatDate($article['date']); ?></p>
					<div class="image">
						<a href="single.php?id=<?php echo $article['id']; ?>">
							<img src="./imagenes/<?php echo $article['image']; ?>" alt="<?php echo $article['title'] ?>">
						</a>
					</div>
					<p class="extract"><?php echo $article['extract'] ?></p>
					<a href="single.php?id=<?php echo $article['id']; ?>" class="continue">Continue reading</a>
				</article>
			</div>
		<?php endforeach; ?>

        <?php require 'pagination.php'; ?>

    </div>

    <?php require 'footer.php'; ?>