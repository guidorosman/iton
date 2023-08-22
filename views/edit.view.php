<?php require 'header.php'; ?>

	<div class="container">
		<div class="post">
			<article>
				<h2 class="title">Edit article</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form" enctype="multipart/form-data" method="post">
					<input type="hidden" name="id" value="<?php echo $article['id']; ?>">
					<input type="text" name="title" value="<?php echo $article['title'] ?>">
					<input type="text" name="extract" value="<?php echo $article['extract']; ?>">
					<textarea name="text"><?php echo $article['text']; ?></textarea>
					<input type="file" name="image">
					<input type="hidden" name="image-saved" value="<?php echo $article['image']; ?>">

					<input type="submit" value="Edit article">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>