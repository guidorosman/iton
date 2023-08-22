<?php require 'header.php' ?>

	<div class="container">
		<h2><?php echo $title; ?></h2>
		<?php foreach($results as $result): ?>
			<div class="post">
				<article>
					<h2 class="title"><a href="single.php?id=<?php echo $result['id']; ?>"><?php echo $result['title'] ?></a></h2>
					<p class="date"><?php echo formatDate($result['date']); ?></p>
					<div class="image">
						<a href="single.php?id=<?php echo $result['id']; ?>">
							<img src="./imagenes/<?php echo $result['image']; ?>" alt="<?php echo $result['title'] ?>">
						</a>
					</div>
					<p class="extract"><?php echo $result['extract'] ?></p>
					<a href="single.php?id=<?php echo $result['id']; ?>" class="continue">Continue reading</a>
				</article>
			</div>
		<?php endforeach; ?>

		<?php require 'pagination.php'; ?>

	</div>

<?php require 'footer.php'; ?>