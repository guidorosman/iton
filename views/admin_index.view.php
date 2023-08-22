<?php require '../views/header.php'; ?>
<div class="container">
	<h2>Admin panel</h2>
	<a href="create.php" class="btn">Create article</a>
	<a href="close.php" class="btn">Close session</a>

	<?php foreach($articles as $article): ?>
	<section class="post">
		<article>
			<h2 class="titulo"><?php echo $article['id'] . '.- ' . $article['title']; ?></h2>
            <a href="../single.php?id=<?php echo $article['id']; ?>">View</a>
            <a href="edit.php?id=<?php echo $article['id']; ?>">Edit</a>
			<a href="delete.php?id=<?php echo $article['id']; ?>">Delete</a>
		</article>
	</section>
	<?php endforeach; ?>
</div>

<?php require '../pagination.php'; ?>

<?php require '../views/footer.php'; ?>